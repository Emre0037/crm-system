<?php

namespace App\Controller;

use App\Form\ChatFormType;
use App\Form\DeleteType;
use App\Form\DeleteUserType;
use App\Form\EditFormType;
use App\Form\ConversationDeleteType;
use PDO;
use App\Entity\Conversation;
use App\Entity\Message;
use App\Repository\MessageRepository;
use App\Repository\UserRepository;
use App\Form\NewConversationType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use App\Entity\User;
use App\Entity\Customers;
use App\Entity\Participant;
use EasyCorp\Bundle\EasyAdminBundle\Config\Assets;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Config\UserMenu;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\Attribute\LiveAction;
use Symfony\UX\LiveComponent\Attribute\LiveArg;
use Symfony\UX\LiveComponent\Attribute\LiveProp;
use Symfony\UX\LiveComponent\DefaultActionTrait;
use Symfony\Component\Form\FormFactoryInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Doctrine\DBAL\Schema\Schema;
use Symfony\Component\Config\Definition\Exception\Exception;

#[AsLiveComponent('chat')]
/**
 * @Route("/messages", name="messages.")
 */
class MessageController extends AbstractDashboardController
{

    use DefaultActionTrait;

    const ATTRIBUTES_TO_SERIALIZE = ['id', 'content', 'createdAt', 'mine'];

   
    /**
     * @var EntityManagerInterface
     */
    #[LiveProp]
    private $entityManager;
    /**
     * @var MessageRepository
     */
    #[LiveProp]
    private $messageRepository;
    /**
     * @var UserRepository
     */
    #[LiveProp]
    private $userRepository;

    private $doctrine;

    public function __construct(EntityManagerInterface $entityManager,
                                MessageRepository $messageRepository,
                                UserRepository $userRepository,
                                ManagerRegistry $doctrine)
    {
        $this->entityManager = $entityManager;
        $this->messageRepository = $messageRepository;
        $this->userRepository = $userRepository;
        $this->doctrine = $doctrine;
    }

    
    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Dashboard')
            ->setLocales([
                'en' => '🇬🇧 English',
                'pl' => '🇵🇱 Polski'
            ])
            // ->renderSidebarMinimized()
            ->renderContentMaximized()
            
            ->disableDarkMode();
            
    }   

   
    public function configureMenuItems(): iterable
    {

        // yield MenuItem::linkToDashboard('Dashboard', 'fa-solid fa-chart-column');
        
        yield MenuItem::linkToRoute('Dashboard', 'fa-solid fa-chart-column', 'admin');
       
        yield MenuItem::section();
        yield MenuItem::section();
        yield MenuItem::section('Support');
        yield MenuItem::linkToRoute('Ticket List', 'fa-solid fa-tag', 'WordpressAccounts');
    

            // ...
            if ( null ===  $this->getUser() ) {
                return $this->render(
                    'security/login.html.twig'
                    , (array) Response::HTTP_UNAUTHORIZED );
            }
            yield MenuItem::subMenu('Chat', 'fa-regular fa-message')->setSubItems([
         MenuItem::linkToRoute('Friends', 'fa-solid fa-user-group', 'messages.welcmechatter'),
         MenuItem::linkToUrl('conversations', 'fa-solid fa-comments', 'http://crm-system:2525/public/messages/1/1'),
         MenuItem::linkToCrud('edit profile', 'fa fa-user-cog', User::class)
         ->setAction('edit')
     
            ->setEntityId($this->container->get('security.token_storage')->getToken()->getUser()->getId()),
    

      


            ]);
        yield MenuItem::linkToCrud('Customers', 'fa-solid fa-users', Customers::class);
        yield MenuItem::section('Company');
        yield MenuItem::linkToRoute('Calendar planner', 'fa-regular fa-calendar-days', 'calenderindex');
        yield MenuItem::linkToRoute('Employee activity logger', 'fa fa-calendar-o', 'calenderindex');
        yield MenuItem::linkToCrud('Employees', 'fas fa-user', User::class);
        yield  MenuItem::section('Company stats');
        yield MenuItem::linkToRoute('Sales', 'fa-solid fa-chart-line', 'PluginListIndex');
        // yield MenuItem::section();
        // yield MenuItem::section();
        // yield MenuItem::section();
        // yield MenuItem::section();
        // yield MenuItem::section();
        // yield MenuItem::section();
        // yield MenuItem::linkToLogout('Logout', 'fa-solid fa-right-from-bracket');
        // yield MenuItem::linkToCrud('The Label', 'fas fa-list', EntityClass::class);
    }



    public function configureUserMenu(UserInterface $user): UserMenu
    {
        // Usually it's better to call the parent method because that gives you a
        // user menu with some menu items already created ("sign out", "exit impersonation", etc.)
        // if you prefer to create the user menu from scratch, use: return UserMenu::new()->...
        return parent::configureUserMenu($user)
            // use the given $user object to get the user name
            ->setName($user->getUsername())
            // use this method if you don't want to display the name of the user
            ->displayUserName(true)

            // you can return an URL with the avatar image
            ->setAvatarUrl($user->getAvatar())
       
            // use this method if you don't want to display the user image
            ->displayUserAvatar(false)
            // you can also pass an email address to use gravatar's service
         

            // you can use any type of menu item, except submenus
            ->addMenuItems([
                MenuItem::linkToCrud('My Profile', 'fa fa-id-card', User::class)
                ->setAction('detail')
                ->setEntityId($this->container->get('security.token_storage')->getToken()->getUser()->getId()),
                MenuItem::linkToCrud('Settings', 'fa fa-user-cog', User::class)
                ->setAction('edit')
                ->setEntityId($this->container->get('security.token_storage')->getToken()->getUser()->getId()),
                // ->setAction('detail'),
                MenuItem::section(),
                MenuItem::linkToLogout('Logout', 'fa fa-sign-out'),
       
            ]);
    }
    public function configureAssets(): Assets
    {
        return parent::configureAssets()
            ->addWebpackEncoreEntry('admin');
    }
/**
 * @Route("/userDeleteGroup/{userid}/{idconversation}", name="user_Delete_Group", methods={"GET", "POST"})
 */
public function removeParticipantFromConversation(Request $request, ManagerRegistry $doctrine, $userid, $idconversation, UserInterface $user)
{

    $selectedUser = $doctrine->getRepository(User::class)->find($userid);
    $selectedConversation = $doctrine->getRepository(Conversation::class)->find($idconversation);

    $participant = $doctrine->getRepository(Participant::class)->findOneBy(['user' => $selectedUser, 'conversation' => $selectedConversation]);

    $this->entityManager->getConnection()->beginTransaction();
    try {
        // Remove the participant from the conversation
        $this->entityManager->remove($participant);
        $this->entityManager->flush();

        $this->entityManager->commit();
    } catch (\Exception $e) {
        // If an error occurs, roll back the transaction and re-throw the exception
        $this->entityManager->rollback();
        throw $e;
    }

    // Get response ready as per your need.
    $response['success'] = true;
    $response['message'] = 'Participant removed from conversation!';

    $referer = $request->headers->get('referer');
    return new RedirectResponse($referer);
}

    /**
 * @Route("/userAdd/{userid}/{idconversation}", name="user_Add", methods={"GET", "POST"})
 */
public function userAdd( Request $request,  ManagerRegistry $doctrine, $userid,$idconversation, UserInterface $user){


$selectedUser = $userid;
$selectedConversation = $idconversation;
print_r($selectedUser);
print_r($selectedConversation);

$conversation = new Conversation();
$selectedUser = $doctrine->getRepository(User::class)->find($userid);
$selectedConversation = $doctrine->getRepository(Conversation::class)->find($idconversation);

$participant = new Participant();
$participant->setUser($selectedUser);
$participant->setConversation($selectedConversation);



$this->entityManager->getConnection()->beginTransaction();
try {
    // Save the new Conversation and Participant objects to the database
 
    $this->entityManager->persist($participant);
  

    $this->entityManager->flush();
    $this->entityManager->commit();

} catch (\Exception $e) {
    // If an error occurs, roll back the transaction and re-throw the exception
    $this->entityManager->rollback();
    throw $e;
}

              
// Redirect back to the previous page
$referer = $request->headers->get('referer');
return new RedirectResponse($referer); 

}
/**
 * @Route("/userinfo/{userid}/{idconversation}", name="user_info", methods={"GET", "POST"})
 */
public function userInfo( Request $request,  ManagerRegistry $doctrine, $userid,$idconversation, UserInterface $user){

    $test = $idconversation;
    
    print_r($test);
    

    $usernamee = "root";
    $connect = new PDO("mysql:host=localhost;dbname=crm-system;charset=utf8mb4", $usernamee);

    // Fetch data from the 'user' table and join it with the 'message' table
        $data = array();
		//right join message dus je pakt de id van de mssage table niet van user omdat je user juist joint met message
		$query = "SELECT * FROM user 
           RIGHT JOIN message ON  message.user_id  = user.id
          ";

		$statement = $connect->prepare( $query );

		$statement->execute();

		$result = $statement->fetchAll();
 // Store the fetched data in the $data array
		foreach ( $result as $row ) {
            // $data[$row] = base64_encode(stream_get_contents());
			$data[] = array(
              
				//Data rows from the table wp_options
                'id'    => $row['id'],  // $row[avatar] = base64_encode(stream_get_contents($data->getFoto()));
         
				'user_id'  => $row['user_id'],
                'avatar' =>  $row['avatar'],
				'conversation_id' => $row['conversation_id'],
                'content' => $row['content'],
				'created_at' => $row['created_at'],
                'email' => trim($row['email'],"@gmail.com"),
                
			);
           
		}
  
        $options = array(
            'http' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data),
            ),
        );


        $data2 = array();
		//SQL query field where we retrieve the row with an option name is like 'active_plugins' from the table wp_options
        $query = "SELECT * FROM message
        JOIN user ON   user.id   = message.user_id
          ";
          

		$statement = $connect->prepare( $query );

		$statement->execute();

		$result = $statement->fetchAll();

		foreach ( $result as $row ) {
            // $data[$row] = base64_encode(stream_get_contents());
			$data2[] = array(
              
				//Data rows from the table wp_options
                'id'    => $row['id'],  // $row[avatar] = base64_encode(stream_get_contents($data->getFoto()));
				'user_id'  => $row['user_id'],
                'avatar' =>  $row['avatar'],
				'conversation_id' => $row['conversation_id'],
				'content' => $row['content'],
				'created_at' => $row['created_at'],
                'email' => trim($row['email'],"@gmail.com"),
			);
           
		}
        $data3 = array();
      
		//Hier pak je de id van de user tabel want je zegt join de id van participant naar die van user dus je pakt hier de id van user
        $query = "SELECT * FROM participant 
         JOIN user ON   user.id   = participant.user_id

       ";
		$statement = $connect->prepare( $query );

		$statement->execute();

		$result = $statement->fetchAll();

		foreach ( $result as $row ) {
            // $data[$row] = base64_encode(stream_get_contents());
			$data3[] = array(
				//Data rows from the table wp_options
                'id'    => $row['id'],  // $row[avatar] = base64_encode(stream_get_contents($data->getFoto()));
                'avatar' =>  $row['avatar'],
                'email' => trim($row['email'],"@gmail.com"),
                'firstname' =>  $row['firstname'],
                'lastname' => $row['lastname'],
                'conversation_id' => $row['conversation_id'],
            
			);
        }

        $data4 = array();
      
		//SQL query field where we retrieve the row with an option name is like 'active_plugins' from the table wp_options
        $query = "SELECT * FROM user 
   

       ";
		$statement = $connect->prepare( $query );

		$statement->execute();

		$result = $statement->fetchAll();

		foreach ( $result as $row ) {
            // $data[$row] = base64_encode(stream_get_contents());
			$data4[] = array(
				//Data rows from the table wp_options
                'id'    => $row['id'],  // $row[avatar] = base64_encode(stream_get_contents($data->getFoto()));
                'avatar' =>  $row['avatar'],
                'email' => trim($row['email'],"@gmail.com"),
                'emailfull' => $row['email'],
                'firstname' =>  $row['firstname'],
                'lastname' => $row['lastname'],
            
            
			);
        }
        $data5 = array();
      
		//SQL query field where we retrieve the row with an option name is like 'active_plugins' from the table wp_options
        $query = "SELECT * FROM conversation 
       
         
       ";
		$statement = $connect->prepare( $query );

		$statement->execute();

		$result = $statement->fetchAll();

		foreach ( $result as $row ) {
            // $data[$row] = base64_encode(stream_get_contents());
			$data5[] = array(
				//Data rows from the table wp_options
                'id'    => $row['id'],  // $row[avatar] = base64_encode(stream_get_contents($data->getFoto()));
               
               
                'image' => base64_encode($row['image']),
                'group_name' => $row['group_name'],
                'group_disc' => $row['group_discription'],
            
			);
        }
        
        $userlogin= $this->container->get('security.token_storage')->getToken()->getUser()->getId();
        $username= str_split($userlogin);

        
        $content = new Message();
		$form1 = $this->createForm( ChatFormType::class, $content);
        $form1->handleRequest( $request );

            if ($form1->isSubmitted() && $form1->isValid()) {
                // $form->getData() holds the submitted values
                // but, the original `$task` variable has also been updated
                $task = $form1->getData();
            
                $entityManager->persist( $content );
                    $entityManager->flush();
                // ... perform some action, such as saving the task to the database
    
                return $this->redirect($request->getUri());
            }
    
            if ( null === $user ) {
                return $this->render(
                    'ErrorPage.html.twig'
                    , (array) Response::HTTP_UNAUTHORIZED );
            }
            // }

            $participantRepo = $doctrine->getRepository(Participant::class);
            $participants = $participantRepo->findBy(['user' => $user->getId()]);
            // $participants = $participantRepo->findAll();
            $conversationIds = array();
            foreach ($participants as $participant) {
                $conversationIds[] = $participant->getConversation()->getId();
            }
           
            $participantRepo = $doctrine->getRepository(Participant::class);

            // Get the conversation ID from the $idConversation variable
         
            $conversationId = $idconversation;
            $participants2 = $participantRepo->findBy(['conversation' => $conversationId]);
            $numUsers = count($participants2);
print_r($numUsers);
            $conversationIdds = array();
            // Check if the conversation has more than 2 participants (i.e. it is a group chat)
            $isGroup = false;
            foreach ($participants2 as $participant2) {
                $conversation = $participant2->getConversation();
                if (count($conversation->getParticipants()) > 2) {
                    $isGroup = true;
                    break;
                }
            }
            $conversation_id = $idconversation;
            $participants = $doctrine->getRepository(Participant::class)->findAll();

            $conversationgroupIds = [];
            foreach ($participants as $participant) {
                $conversationgroupIds[] = $participant->getConversation()->getId();
            }
            
            $conversationgroupIds = array_count_values($conversationgroupIds);
            $conversationgroupIds = array_filter($conversationgroupIds, function ($count) {
                return $count == 2;
            });
            $conversationgroupIds = array_keys($conversationgroupIds);

            

            
    return $this->render("conversation/userinfo.html.twig", [
        'data' => $data,
        'data2' => $data2,
        'data3' => $data3,
        'data4' => $data4,
        'data5' => $data5,
   
        'numUsers' => $numUsers,
        'conversationgroupIds' => $conversationgroupIds,
        'conversationIds' => $conversationIds,
        'isGroup' => $isGroup,
        'conversation_id' => $conversation_id,
 

        'userid' => $userid,
        // 'hasUser' => $hasUser,
        // 'messages' => $messages,
        'chatForm' => $form1->createView(),
    ]);
}
    
/**
 * @Route("/groupinfo/{idConversation}", name="group_info", methods={"GET", "POST"})
 */
public function groupInfo( Request $request,  ManagerRegistry $doctrine, $idConversation, UserInterface $user){

    $test = $idConversation;
    
    print_r($test);
    

    $usernamee = "root";
    $connect = new PDO("mysql:host=localhost;dbname=crm-system;charset=utf8mb4", $usernamee);

    // Fetch data from the 'user' table and join it with the 'message' table
        $data = array();
		//right join message dus je pakt de id van de mssage table niet van user omdat je user juist joint met message
		$query = "SELECT * FROM user 
           RIGHT JOIN message ON  message.user_id  = user.id
          ";

		$statement = $connect->prepare( $query );

		$statement->execute();

		$result = $statement->fetchAll();
 // Store the fetched data in the $data array
		foreach ( $result as $row ) {
            // $data[$row] = base64_encode(stream_get_contents());
			$data[] = array(
              
				//Data rows from the table wp_options
                'id'    => $row['id'],  // $row[avatar] = base64_encode(stream_get_contents($data->getFoto()));
         
				'user_id'  => $row['user_id'],
                'avatar' =>  $row['avatar'],
				'conversation_id' => $row['conversation_id'],
                'content' => $row['content'],
				'created_at' => $row['created_at'],
                'email' => trim($row['email'],"@gmail.com"),
                
			);
           
		}
  
        $options = array(
            'http' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data),
            ),
        );


        $data2 = array();
		//SQL query field where we retrieve the row with an option name is like 'active_plugins' from the table wp_options
        $query = "SELECT * FROM message
        JOIN user ON   user.id   = message.user_id
          ";
          

		$statement = $connect->prepare( $query );

		$statement->execute();

		$result = $statement->fetchAll();

		foreach ( $result as $row ) {
            // $data[$row] = base64_encode(stream_get_contents());
			$data2[] = array(
              
				//Data rows from the table wp_options
                'id'    => $row['id'],  // $row[avatar] = base64_encode(stream_get_contents($data->getFoto()));
				'user_id'  => $row['user_id'],
                'avatar' =>  $row['avatar'],
				'conversation_id' => $row['conversation_id'],
				'content' => $row['content'],
				'created_at' => $row['created_at'],
                'email' => trim($row['email'],"@gmail.com"),
			);
           
		}
        $data3 = array();
      
		//Hier pak je de id van de user tabel want je zegt join de id van participant naar die van user dus je pakt hier de id van user
        $query = "SELECT * FROM participant 
         JOIN user ON   user.id   = participant.user_id

       ";
		$statement = $connect->prepare( $query );

		$statement->execute();

		$result = $statement->fetchAll();

		foreach ( $result as $row ) {
            // $data[$row] = base64_encode(stream_get_contents());
			$data3[] = array(
				//Data rows from the table wp_options
                'id'    => $row['id'],  // $row[avatar] = base64_encode(stream_get_contents($data->getFoto()));
                'avatar' =>  $row['avatar'],
                'email' => trim($row['email'],"@gmail.com"),
                'firstname' =>  $row['firstname'],
                'lastname' => $row['lastname'],
                'conversation_id' => $row['conversation_id'],
            
			);
        }

        $data4 = array();
      
		//SQL query field where we retrieve the row with an option name is like 'active_plugins' from the table wp_options
        $query = "SELECT * FROM user 
   

       ";
		$statement = $connect->prepare( $query );

		$statement->execute();

		$result = $statement->fetchAll();

		foreach ( $result as $row ) {
            // $data[$row] = base64_encode(stream_get_contents());
			$data4[] = array(
				//Data rows from the table wp_options
                'id'    => $row['id'],  // $row[avatar] = base64_encode(stream_get_contents($data->getFoto()));
                'avatar' =>  $row['avatar'],
                'email' => trim($row['email'],"@gmail.com"),
                'emailfull' => $row['email'],
                'firstname' =>  $row['firstname'],
                'lastname' => $row['lastname'],
            
            
			);
        }
        $data5 = array();
      
		//SQL query field where we retrieve the row with an option name is like 'active_plugins' from the table wp_options
        $query = "SELECT * FROM conversation 
       
         
       ";
		$statement = $connect->prepare( $query );

		$statement->execute();

		$result = $statement->fetchAll();

		foreach ( $result as $row ) {
            // $data[$row] = base64_encode(stream_get_contents());
			$data5[] = array(
				//Data rows from the table wp_options
                'id'    => $row['id'],  // $row[avatar] = base64_encode(stream_get_contents($data->getFoto()));
               
               
                'image' => base64_encode($row['image']),
                'group_name' => $row['group_name'],
                'group_disc' => $row['group_discription'],
            
			);
        }
        
        $userlogin= $this->container->get('security.token_storage')->getToken()->getUser()->getId();
        $username= str_split($userlogin);

        
        $content = new Message();
		$form1 = $this->createForm( ChatFormType::class, $content);
        $form1->handleRequest( $request );

            if ($form1->isSubmitted() && $form1->isValid()) {
                // $form->getData() holds the submitted values
                // but, the original `$task` variable has also been updated
                $task = $form1->getData();
            
                $entityManager->persist( $content );
                    $entityManager->flush();
                // ... perform some action, such as saving the task to the database
    
                return $this->redirect($request->getUri());
            }
    
            if ( null === $user ) {
                return $this->render(
                    'ErrorPage.html.twig'
                    , (array) Response::HTTP_UNAUTHORIZED );
            }
            // }

            $participantRepo = $doctrine->getRepository(Participant::class);
            $participants = $participantRepo->findBy(['user' => $user->getId()]);
            // $participants = $participantRepo->findAll();
            $conversationIds = array();
            foreach ($participants as $participant) {
                $conversationIds[] = $participant->getConversation()->getId();
            }
           
            $participantRepo = $doctrine->getRepository(Participant::class);

            // Get the conversation ID from the $idConversation variable
         
            $conversationId = $idConversation;
            $participants2 = $participantRepo->findBy(['conversation' => $conversationId]);
            $numUsers = count($participants2);
print_r($numUsers);
            $conversationIdds = array();
            // Check if the conversation has more than 2 participants (i.e. it is a group chat)
            $isGroup = false;
            foreach ($participants2 as $participant2) {
                $conversation = $participant2->getConversation();
                if (count($conversation->getParticipants()) > 2) {
                    $isGroup = true;
                    break;
                }
            }
            $conversation_id = $idConversation;
            $participants = $doctrine->getRepository(Participant::class)->findAll();

            $conversationgroupIds = [];
            foreach ($participants as $participant) {
                $conversationgroupIds[] = $participant->getConversation()->getId();
            }
            
            $conversationgroupIds = array_count_values($conversationgroupIds);
            $conversationgroupIds = array_filter($conversationgroupIds, function ($count) {
                return $count == 2;
            });
            $conversationgroupIds = array_keys($conversationgroupIds);

            $conversationupload = $doctrine->getRepository(Conversation::class)->find($idConversation);
            // Check if the form was submitted
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
              // Get the Doctrine entity manager from somewhere
              $em = $doctrine->getManager();
              
              // Get the values from the form
              $file = $_FILES['file-upload'];
              $groupname = $_POST['groupname'];
              $groupdisc = $_POST['groupdisc'];
              
              // Print the values for debugging
              print_r($file);
              print_r($groupname);
              print_r($groupdisc);
             
              // Update the user information in the database
      
              $conversationupload->setGroupName($groupname);
              $conversationupload->setGroupDiscription($groupdisc);

              if ($file['error'] === UPLOAD_ERR_OK) {
                $fileName = $file['name'];
                $fileType = $file['type'];
                $fileTempName = $file['tmp_name'];
                $fileSize = $file['size'];
            
                // Do something with the uploaded file
                // Move the uploaded file to a desired location
            $filePath = $this->getParameter('kernel.project_dir').'/public/profileImages/' . $fileName;
            move_uploaded_file($fileTempName, $filePath);
        
            $image2 = imagecreatefromstring(file_get_contents($this->getParameter('kernel.project_dir').'/public/profileImages/' . $fileName));
            
            $width = imagesx($image2);
            $height = imagesy($image2);
            if ($width != $height) {
                $newSize = min($width, $height);
                $newImage = imagecrop($image2, ['x' => 0, 'y' => 0, 'width' => $newSize, 'height' => $newSize]);
                imagedestroy($image2);
                imagejpeg($newImage, $filePath);
                imagedestroy($newImage);
            }
            // Set the file path as the image value
            $conversation->setImage(file_get_contents($filePath));
        
        
            }
              $em->flush();
              
              // Redirect back to the previous page
              $referer = $request->headers->get('referer');
              return new RedirectResponse($referer);
            }
         
            
    return $this->render("conversation/groupinfo.html.twig", [
        'data' => $data,
        'data2' => $data2,
        'data3' => $data3,
        'data4' => $data4,
        'data5' => $data5,
     'numUsers' => $numUsers,
        'conversationgroupIds' => $conversationgroupIds,
        'conversationIds' => $conversationIds,
        'isGroup' => $isGroup,
        'conversation_id' => $conversation_id,
        // 'hasUser' => $hasUser,
        // 'messages' => $messages,
        'chatForm' => $form1->createView(),
    ]);
    
    
    
    
    
    }
    /**
     * @Route("/welcome", name="welcmechatter",   methods={"GET", "POST"})
     */
    public function getConversationPage( Request $request, ManagerRegistry $doctrine, UserInterface $user)
    {

        $participants = $doctrine->getRepository(Participant::class)->findAll();

        $conversationgroupIds = [];
        foreach ($participants as $participant) {
            $conversationgroupIds[] = $participant->getConversation()->getId();
        }
        
        $conversationgroupIds = array_count_values($conversationgroupIds);
        $conversationgroupIds = array_filter($conversationgroupIds, function ($count) {
            return $count == 2;
        });
        $conversationgroupIds = array_keys($conversationgroupIds);
       
        

        $userlogin= $this->container->get('security.token_storage')->getToken()->getUser()->getFirstname();
        $dbName = $userlogin ."participant";

       
        $schema = $doctrine->getConnection()->getSchemaManager();

        // if (!$schema->tablesExist([$dbName])) {
        //     return $this->render( 'conversation/errornullconv.html.twig');
        // }
     
        // can i view the conversation
        $usernamee = "root";
        $connect = new PDO("mysql:host=localhost;dbname=crm-system", $usernamee);

        $data = array();
      
		//SQL query field where we retrieve the row with an option name is like 'active_plugins' from the table wp_options
        $query = "SELECT * FROM participant 
         JOIN user ON   user.id   = participant.user_id
       ";
		$statement = $connect->prepare( $query );

		$statement->execute();

		$result = $statement->fetchAll();

		foreach ( $result as $row ) {
            // $data[$row] = base64_encode(stream_get_contents());
			$data[] = array(
				//Data rows from the table wp_options
                'id'    => $row['id'],  // $row[avatar] = base64_encode(stream_get_contents($data->getFoto()));
                'avatar' =>  $row['avatar'],
                'email' => trim($row['email'],"@gmail.com"),
                'firstname' =>  $row['firstname'],
                'lastname' => $row['lastname'],
                'conversation_id' => $row['conversation_id'],
            
			);
        }
        $data2 = array();
      
		//SQL query field where we retrieve the row with an option name is like 'active_plugins' from the table wp_options
        $query = "SELECT * FROM user 
      
       ";
		$statement = $connect->prepare( $query );

		$statement->execute();

		$result = $statement->fetchAll();

		foreach ( $result as $row ) {
            // $data[$row] = base64_encode(stream_get_contents());
			$data2[] = array(
				//Data rows from the table wp_options
                'id'    => $row['id'],  // $row[avatar] = base64_encode(stream_get_contents($data->getFoto()));
                'avatar' =>  $row['avatar'],
                'email' => trim($row['email'],"@gmail.com"),
                'emailfull' => $row['email'],
                'firstname' =>  $row['firstname'],
                'lastname' => $row['lastname'],
                'profile_image' => base64_encode($row['profile_image']),
              
            
			);
        }
        $data3 = array();
      
		//SQL query field where we retrieve the row with an option name is like 'active_plugins' from the table wp_options
        $query = "SELECT * FROM conversation 
       
         
       ";
		$statement = $connect->prepare( $query );

		$statement->execute();

		$result = $statement->fetchAll();

		foreach ( $result as $row ) {
            // $data[$row] = base64_encode(stream_get_contents());
			$data3[] = array(
				//Data rows from the table wp_options
                'id'    => $row['id'],  // $row[avatar] = base64_encode(stream_get_contents($data->getFoto()));
               
               
                'image' => base64_encode($row['image']),
                'group_name' => $row['group_name'],
                'group_discription' => $row['group_discription'],
            
			);
        }
        $content = new Participant();
		$form = $this->createForm( NewConversationType::class, $content);
        $form->handleRequest( $request );

            if ($form->isSubmitted() && $form->isValid()) {
                // $form->getData() holds the submitted values
                // but, the original `$task` variable has also been updated
                $task = $form->getData();
            
                $entityManager->persist( $content );
                    $entityManager->flush();
                // ... perform some action, such as saving the task to the database
    
                return $this->redirect($request->getUri());
            }
       
            $participantRepo = $doctrine->getRepository(Participant::class);
            $participants = $participantRepo->findBy(['user' => $user->getId()]);
            // $participants = $participantRepo->findAll();
            $conversationIds = array();
            foreach ($participants as $participant) {
                $conversationIds[] = $participant->getConversation()->getId();
            }
        $userlogin= $this->container->get('security.token_storage')->getToken()->getUser()->getFirstname();
        $dbName = $userlogin ."participant";
   
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $em = $doctrine->getManager();
            $file = $_FILES['file-upload'];
            $firstName = $_POST['firstname'];
            $lastName = $_POST['lastname'];
            $email = $_POST['email'];
           
            print_r($file);
            print_r($firstName);
            print_r($lastName);
            print_r($email);
         // Update user information in the database
         $user->setFirstName($firstName);
         $user->setLastName($lastName);
         $user->setEmail($email);
            if ($file['error'] === UPLOAD_ERR_OK) {
                $fileName = $file['name'];
                $fileType = $file['type'];
                $fileTempName = $file['tmp_name'];
                $fileSize = $file['size'];
            
                // Do something with the uploaded file
                // Move the uploaded file to a desired location
            $filePath = $this->getParameter('kernel.project_dir').'/public/profileImages/' . $fileName;
            move_uploaded_file($fileTempName, $filePath);
        
            $image2 = imagecreatefromstring(file_get_contents($this->getParameter('kernel.project_dir').'/public/profileImages/' . $fileName));
            
            $width = imagesx($image2);
            $height = imagesy($image2);
            if ($width != $height) {
                $newSize = min($width, $height);
                $newImage = imagecrop($image2, ['x' => 0, 'y' => 0, 'width' => $newSize, 'height' => $newSize]);
                imagedestroy($image2);
                imagejpeg($newImage, $filePath);
                imagedestroy($newImage);
            }


         
            // Set the file path as the image value
            $user->setProfileImage(file_get_contents($filePath));
            // Validate form data
          
           
        
          }
          $em->flush();
          $referer = $request->headers->get('referer');
          return new RedirectResponse($referer);
        }
          
        return $this->render( 'conversation/firstchat.html.twig', [
			'data' => $data,
            'data2' => $data2,
            'data3' => $data3,
            'conversationIds' => $conversationIds,
            'conversationgroupIds' => $conversationgroupIds,
            'newconv' =>$form->createView(),
        
		] );
    }

    public function hasUser(User $user, Conversation $conversation)
    {
        $participant = $this->getDoctrine()->getRepository(Participant::class)->findOneBy(['conversation' => $conversation, 'user' => $user]);
        return $participant !== null;
    }

/**
 * @Route("/{otherUser}/{id}", name="getMessages", methods={"GET", "POST"})
 * This route defines the URL for the "getConversation" function and the methods (GET or POST) that are allowed for this route.
 */
public function getConversation(#[LiveArg] Request $request , ManagerRegistry $doctrine ,EntityManagerInterface $entityManager, UserInterface $user,$otherUser , $id)
{
    // Fetch all participants from the Participant repository
    $participants = $doctrine->getRepository(Participant::class)->findAll();

    // Get an array of conversation group IDs, where each conversation group ID is repeated exactly 2 times (once for each participant)
    $conversationgroupIds = [];
    foreach ($participants as $participant) {
        $conversationgroupIds[] = $participant->getConversation()->getId();
    }
    $conversationgroupIds = array_count_values($conversationgroupIds);
    $conversationgroupIds = array_filter($conversationgroupIds, function ($count) {
        return $count == 2;
    });
    $conversationgroupIds = array_keys($conversationgroupIds);

    // Fetch the user whose chat the current user wants to view
    $otherUserchat = $request->get('otherUser', 0);
    $otherUserchat = $this->userRepository->find($otherUser);
    $otherUserName= $otherUserchat->getFirstname();

    // Check if the current user is authorized to view the conversation
    $userlogin= $this->container->get('security.token_storage')->getToken()->getUser()->getFirstname();
    $dbName =  $userlogin ."participant";
    // $dbNametest = $otherUserName . $userlogin ."participant";

    // Connect to the MySQL database 'crm-system' using the root user
    $usernamee = "root";
    $connect = new PDO("mysql:host=localhost;dbname=crm-system;charset=utf8mb4", $usernamee);

    // Fetch data from the 'user' table and join it with the 'message' table
        $data = array();
		//right join message dus je pakt de id van de mssage table niet van user omdat je user juist joint met message
		$query = "SELECT * FROM user 
           RIGHT JOIN message ON  message.user_id  = user.id
          ";

		$statement = $connect->prepare( $query );

		$statement->execute();

		$result = $statement->fetchAll();
 // Store the fetched data in the $data array
		foreach ( $result as $row ) {
            // $data[$row] = base64_encode(stream_get_contents());
			$data[] = array(
              
				//Data rows from the table wp_options
                'id'    => $row['id'],  // $row[avatar] = base64_encode(stream_get_contents($data->getFoto()));
         
				'user_id'  => $row['user_id'],
                'avatar' =>  $row['avatar'],
				'conversation_id' => $row['conversation_id'],
                'content' => $row['content'],
				'created_at' => $row['created_at'],
                'email' => trim($row['email'],"@gmail.com"),
                
			);
           
		}
  
        $options = array(
            'http' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data),
            ),
        );


        $data2 = array();
		//SQL query field where we retrieve the row with an option name is like 'active_plugins' from the table wp_options
        $query = "SELECT * FROM message
        JOIN user ON   user.id   = message.user_id
          ";
          

		$statement = $connect->prepare( $query );

		$statement->execute();

		$result = $statement->fetchAll();

		foreach ( $result as $row ) {
            // $data[$row] = base64_encode(stream_get_contents());
			$data2[] = array(
              
				//Data rows from the table wp_options
                'id'    => $row['id'],  // $row[avatar] = base64_encode(stream_get_contents($data->getFoto()));
				'user_id'  => $row['user_id'],
                'avatar' =>  $row['avatar'],
				'conversation_id' => $row['conversation_id'],
				'content' => $row['content'],
				'created_at' => $row['created_at'],
                'email' => trim($row['email'],"@gmail.com"),
			);
           
		}
        $data3 = array();
      
		//Hier pak je de id van de user tabel want je zegt join de id van participant naar die van user dus je pakt hier de id van user
        $query = "SELECT * FROM participant 
         JOIN user ON   user.id   = participant.user_id

       ";
		$statement = $connect->prepare( $query );

		$statement->execute();

		$result = $statement->fetchAll();

		foreach ( $result as $row ) {
            // $data[$row] = base64_encode(stream_get_contents());
			$data3[] = array(
				//Data rows from the table wp_options
                'id'    => $row['id'],  // $row[avatar] = base64_encode(stream_get_contents($data->getFoto()));
                'avatar' =>  $row['avatar'],
                'email' => trim($row['email'],"@gmail.com"),
                'firstname' =>  $row['firstname'],
                'lastname' => $row['lastname'],
                'conversation_id' => $row['conversation_id'],
            
			);
        }

        $data4 = array();
      
		//SQL query field where we retrieve the row with an option name is like 'active_plugins' from the table wp_options
        $query = "SELECT * FROM user 
   

       ";
		$statement = $connect->prepare( $query );

		$statement->execute();

		$result = $statement->fetchAll();

		foreach ( $result as $row ) {
            // $data[$row] = base64_encode(stream_get_contents());
			$data4[] = array(
				//Data rows from the table wp_options
                'id'    => $row['id'],  // $row[avatar] = base64_encode(stream_get_contents($data->getFoto()));
                'avatar' =>  $row['avatar'],
                'email' => trim($row['email'],"@gmail.com"),
                'emailfull' => $row['email'],
                'firstname' =>  $row['firstname'],
                'lastname' => $row['lastname'],
            
            
			);
        }
        $data5 = array();
      
		//SQL query field where we retrieve the row with an option name is like 'active_plugins' from the table wp_options
        $query = "SELECT * FROM conversation 
       
         
       ";
		$statement = $connect->prepare( $query );

		$statement->execute();

		$result = $statement->fetchAll();

		foreach ( $result as $row ) {
            // $data[$row] = base64_encode(stream_get_contents());
			$data5[] = array(
				//Data rows from the table wp_options
                'id'    => $row['id'],  // $row[avatar] = base64_encode(stream_get_contents($data->getFoto()));
               
               
                'image' => base64_encode($row['image']),
                'group_name' => $row['group_name'],
                'group_disc' => $row['group_discription'],
            
			);
        }
        
        $userlogin= $this->container->get('security.token_storage')->getToken()->getUser()->getId();
        $username= str_split($userlogin);

        
        $content = new Message();
		$form1 = $this->createForm( ChatFormType::class, $content);
        $form1->handleRequest( $request );

            if ($form1->isSubmitted() && $form1->isValid()) {
                // $form->getData() holds the submitted values
                // but, the original `$task` variable has also been updated
                $task = $form1->getData();
            
                $entityManager->persist( $content );
                    $entityManager->flush();
                // ... perform some action, such as saving the task to the database
    
                return $this->redirect($request->getUri());
            }
    
            if ( null === $user ) {
                return $this->render(
                    'ErrorPage.html.twig'
                    , (array) Response::HTTP_UNAUTHORIZED );
            }
            // }

            $participantRepo = $doctrine->getRepository(Participant::class);
            $participants = $participantRepo->findBy(['user' => $user->getId()]);
            // $participants = $participantRepo->findAll();
            $conversationIds = array();
            foreach ($participants as $participant) {
                $conversationIds[] = $participant->getConversation()->getId();
            }
           
            $participantRepo = $doctrine->getRepository(Participant::class);

            // Get the conversation ID from the $idConversation variable
         
            $conversationId = $id;
            $participants2 = $participantRepo->findBy(['conversation' => $conversationId]);
            $conversationIdds = array();
            // Check if the conversation has more than 2 participants (i.e. it is a group chat)
            $isGroup = false;
            foreach ($participants2 as $participant2) {
                $conversation = $participant2->getConversation();
                if (count($conversation->getParticipants()) > 2) {
                    $isGroup = true;
                    break;
                }
            }
            $conversation_id = $id;
        // if ($participant1 !== null && $participant2 !== null) {
        return $this->render( 'conversation/chat.html.twig', [
			'data' => $data,
            'data2' => $data2,
            'data3' => $data3,
            'data4' => $data4,
            'data5' => $data5,
            'otherUser' => $otherUser,
            'conversationgroupIds' => $conversationgroupIds,
            'conversationIds' => $conversationIds,
            'isGroup' => $isGroup,
            'conversation_id' => $conversation_id,
            // 'hasUser' => $hasUser,
            // 'messages' => $messages,
            'chatForm' => $form1->createView(),
            // 'chatDelete' => $form2->createView(),
            // 'deleteForm' => $form->createView(),
		] );
            // } else {
            //     echo 'error';
            // }
    }
//     public function hasUser($conversation, User $user, ManagerRegistry $doctrine)
// {
//     $participant = $doctrine->getRepository(Participant::class)->findOneBy(['conversation' => $conversation, 'user' => $user]);
//     return $participant !== null;
// }
/**
 * @Route("/{otherUser}/delete/{id}", name="category_delete", methods={"GET", "DELETE"})
 */
public function deleteAction( Request $request,int $id, ManagerRegistry $doctrine, $otherUser)
{
    /*
     * Check Permission.
     */
    $response = array(
        'success' => true,
        'message' => '',
        'html' => '',
    );

    $repository = $doctrine ->getRepository(Message::class);
    $category = $repository->find($id);

    $form = $this->createForm(DeleteType::class , $category);
        $form->handleRequest($request);
            $em = $doctrine->getManager();
            $em->remove($category);
            $em->flush();

            // Get response ready as per your need.
            $response['success'] = true;
            $response['message'] = 'Deleted Successfully!';
         
            $referer = $request->headers->get('referer');
            return new RedirectResponse($referer);

        // In case you want to redirect.
        // $this->addFlash('notice', 'Deleted Successfully!');
        // return $this->redirectToRoute('category_index');
    
    // $render = $this->render(':category:delete_confirm.html.twig', array(
    //     'delete_form' => $form->createView(),
    //     'category' => $category,
    // ));



   
}

/**
 * @Route("/deleteuser/{id}/{idConversation}", name="category_delete_user", methods={"GET", "DELETE"})
 */
public function deleteUserAction( Request $request, int $id, ManagerRegistry $doctrine, $idConversation, UserInterface $user)
{

 $participantRepo = $doctrine->getRepository(Participant::class);

    // Get the conversation ID from the $idConversation variable
    $conversationId = $idConversation;
    $participants = $participantRepo->findBy(['conversation' => $conversationId]);
    $conversationIds = array();
    // Check if the conversation has more than 2 participants (i.e. it is a group chat)
    foreach ($participants as $participant) {
        $conversation = $participant->getConversation();
        if (count($conversation->getParticipants()) == 2) {
            $conversationIds[] = $conversation->getId();
        }
    }

    if (!in_array($conversationId, $conversationIds)) {
        throw new Exception("This is not a group chat");
    }

    // First, delete all the participants of the conversation
    foreach ($participants as $participant) {
        $em = $doctrine->getManager();
        $em->remove($participant);
        $em->flush();
    }
    $messageRepository = $doctrine->getRepository(Message::class);
    $messages = $messageRepository->findBy(['conversation' => $conversationId]);

    $em = $doctrine->getManager();
    foreach ($messages as $message) {
        $em->remove($message);
    }
    $em->flush();
        
    // Now, delete the conversation
    $conversationRepository = $doctrine->getRepository(Conversation::class);
    $conversation = $conversationRepository->findOneBy(['id' => $conversationId]);

    $form = $this->createForm(ConversationDeleteType::class, $conversation);
    $form->handleRequest($request);

    $em = $doctrine->getManager();
    $em->remove($conversation);
    $em->flush();

    // Get response ready as per your need.
    $response['success'] = true;
    $response['message'] = 'Group Deleted Successfully!';

    $referer = $request->headers->get('referer');
    return new RedirectResponse($referer);

   
}
/**
 * @Route("/deletegroup/{id}/{idConversation}", name="category_delete_group", methods={"GET", "DELETE"})
 */
public function deleteGroupAction(Request $request, int $id, ManagerRegistry $doctrine, $idConversation, UserInterface $user)
{
    $participantRepo = $doctrine->getRepository(Participant::class);

    // Get the conversation ID from the $idConversation variable
    $conversationId = $idConversation;
    $participants = $participantRepo->findBy(['conversation' => $conversationId]);
    $conversationIds = array();
    // Check if the conversation has more than 2 participants (i.e. it is a group chat)
    foreach ($participants as $participant) {
        $conversation = $participant->getConversation();
        if (count($conversation->getParticipants()) > 2) {
            $conversationIds[] = $conversation->getId();
        }
    }

    if (!in_array($conversationId, $conversationIds)) {
        throw new Exception("This is not a group chat");
    }

    // First, delete all the participants of the conversation
    foreach ($participants as $participant) {
        $em = $doctrine->getManager();
        $em->remove($participant);
        $em->flush();
    }
    $messageRepository = $doctrine->getRepository(Message::class);
    $messages = $messageRepository->findBy(['conversation' => $conversationId]);

    $em = $doctrine->getManager();
    foreach ($messages as $message) {
        $em->remove($message);
    }
    $em->flush();
        
    // Now, delete the conversation
    $conversationRepository = $doctrine->getRepository(Conversation::class);
    $conversation = $conversationRepository->findOneBy(['id' => $conversationId]);

    $form = $this->createForm(ConversationDeleteType::class, $conversation);
    $form->handleRequest($request);

    $em = $doctrine->getManager();
    $em->remove($conversation);
    $em->flush();

    // Get response ready as per your need.
    $response['success'] = true;
    $response['message'] = 'Group Deleted Successfully!';

    $referer = $request->headers->get('referer');
    return new RedirectResponse($referer);
}




       
}
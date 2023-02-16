<?php

namespace App\Controller;

use PDO;
use App\Form\NewConversationType;
use App\Entity\Conversation;
use App\Entity\Message;
use App\Entity\User;
use App\Entity\Participant;
use App\Entity\Customers;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Config\Assets;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Config\UserMenu;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends AbstractDashboardController
{

    //     /**
    //  * @Route("tabletest", name="tabletest")
    //  */
    // public function someaction()
    // {
    //     $userlogin= $this->container->get('security.token_storage')->getToken()->getUser()->getFirstname();
    //     $dbName = $userlogin ."participant";
    
    //     $file = $this->getParameter('kernel.project_dir').'/src/Entity/'."$dbName".'.php';
    //     $code = '<?php

    //     namespace App\Entity;
        
    //     use Doctrine\ORM\Mapping as ORM;
        
    //     /**
    //      * '."$dbName".'
    //      *
    //      * @ORM\Table(name="'."$dbName".'", )
    //      * @ORM\Entity
    //      */
    //     class '."$dbName".'
    //     {
    //         /**
    //          * @var int
    //          *
    //          * @ORM\Column(name="id", type="integer", nullable=false)
    //          * @ORM\Id
    //          * @ORM\GeneratedValue(strategy="IDENTITY")
    //          */
    //         private $id;
        
        
    //         /**
    //          * @ORM\ManyToOne(targetEntity="User", inversedBy="'."$dbName".'")
    //          */
    //         private $user;
        
    //         /**
    //          * @ORM\ManyToOne(targetEntity="Conversation", inversedBy="'."$dbName".'")
    //          */
    //         private $conversation;
        
            
    //         public function getId(): ?int
    //         {
    //             return $this->id;
    //         }
        
    //         public function getUser(): ?User
    //         {
    //             return $this->user;
    //         }
        
    //         public function setUser(?User $user): self
    //         {
    //             $this->user = $user;
        
    //             return $this;
    //         }
        
    //         public function getConversation(): ?Conversation
    //         {
    //             return $this->conversation;
    //         }
        
    //         public function setConversation(?Conversation $conversation): self
    //         {
    //             $this->conversation = $conversation;
        
    //             return $this;
    //         }
        
    //     }
        
    //     ';
    //     $this->createFile($file , $code);
    //     return $this->redirectToRoute('messages.welcmechatter');
    // }

// public function createFile($file, $code)
// {
//     touch($file);
//     file_put_contents($file, $code);
// }

//   /**
//      * @Route("tabletest2", name="tabletest2")
//      */
//     public function someactionMessage()
//     {
//         $userlogin= $this->container->get('security.token_storage')->getToken()->getUser()->getFirstname();
//         $dbName = $userlogin ."message";
    
//         $file = $this->getParameter('kernel.project_dir').'/src/Entity/'."$dbName".'.php';
//         $code = '<?php

//         namespace App\Entity;
        
//         use Doctrine\DBAL\Types\Types;
//         use Doctrine\ORM\Mapping as ORM;
//         use Doctrine\ORM\Mapping\Index;
        
//         /**
//          * @ORM\Entity(repositoryClass="App\Repository\MessageRepository")
//          * @ORM\Table(name="'."$dbName".'" )
//          * @ORM\HasLifecycleCallbacks()
//          */
//         class '."$dbName".'
//         {
//             use Timestamp;
        
//             /**
//              * @ORM\Id()
//              * @ORM\GeneratedValue()
//              * @ORM\Column(type="integer")
//              */
//             private $id;
        
//             /**
//              * @ORM\Column(type="text")
//              */
//             private $content;
        
//             /**
//              * @ORM\ManyToOne(targetEntity="User", inversedBy="'."$dbName".'")
//              */
//             private $user;
        
//             /**
//              * @ORM\ManyToOne(targetEntity="Conversation", inversedBy="'."$dbName".'")
//              */
//             private $conversation;
        
//             private $mine;
        
        
//             public function getId(): ?int
//             {
//                 return $this->id;
//             }
        
//             public function getContent(): ?string
//             {
//                 return $this->content;
//             }
        
//             public function setContent(string $content): self
//             {
//                 $this->content = $content;
        
//                 return $this;
//             }
        
//             public function getUser(): ?User
//             {
//                 return $this->user;
//             }
        
//             public function setUser(?User $user): self
//             {
//                 $this->user = $user;
        
//                 return $this;
//             }
        
//             public function getConversation(): ?Conversation
//             {
//                 return $this->conversation;
//             }
        
//             public function setConversation(?Conversation $conversation): self
//             {
//                 $this->conversation = $conversation;
        
//                 return $this;
//             }
        
//             /**
//              * @return mixed
//              */
//             public function getMine()
//             {
//                 return $this->mine;
//             }
//             // public function __toString(): string
//             // {
//             //    return  $this->getConversation;
//             // }
//             /**
//              * @param mixed $mine
//              */
//             public function setMine($mine): void
//             {
//                 $this->mine = $mine;
//             }
//         }
        
//         ';
//         $this->createFileMessage($file , $code);
//         return $this->redirectToRoute('messages.welcmechatter');
//     }

// public function createFileMessage($file, $code)
// {
//     touch($file);
//     file_put_contents($file, $code);
// }
    #[Route('/test', name: 'app_home')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/HomeController.php',
        ]);
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
     * @Route("/test4", name="test4")
     */
    public function test()
    {
        // can i view the conversation
        $user = "root";
        $connect = new PDO("mysql:host=localhost;dbname=crm-system", $user);

        $data = array();
		//SQL query field where we retrieve the row with an option name is like 'active_plugins' from the table wp_options
		$query = "SELECT * FROM user 
       ";

		$statement = $connect->prepare( $query );

		$statement->execute();

		$result = $statement->fetchAll();

		foreach ( $result as $row ) {
			$data[] = array(
				//Data rows from the table wp_options
                'email' => $row['email'],
			);

		}
      

        return $this->json($data);
    }
    // /**
    //  * @Route("/friends", name="make_conversation_page" , methods={"GET", "POST"})
    //  * 
    //  */
    // public function firstPage(Request $request, EntityManagerInterface $entityManager,UserInterface $user ) {
       
    //     $userlogin= $this->container->get('security.token_storage')->getToken()->getUser()->getFirstname();
    //     $dbName = $userlogin ."participant";

    //     $user = "root";
    //     $connect = new PDO("mysql:host=localhost;dbname=crm-system", $user);

    //     $data = array();
      
	// 	//SQL query field where we retrieve the row with an option name is like 'active_plugins' from the table wp_options
    //     $query = "SELECT * FROM $dbName 
    //     JOIN user ON   user.id   = $dbName .user_id
       
    //    ";
	// 	$statement = $connect->prepare( $query );

	// 	$statement->execute();

	// 	$result = $statement->fetchAll();

	// 	foreach ( $result as $row ) {
    //         // $data[$row] = base64_encode(stream_get_contents());
	// 		$data[] = array(
	// 			//Data rows from the table wp_options
    //             'id'    => $row['id'],  // $row[avatar] = base64_encode(stream_get_contents($data->getFoto()));
    //             'avatar' =>  $row['avatar'],
    //             'email' => trim($row['email'],"@gmail.com"),
    //             'firstname' =>  $row['firstname'],
    //             'lastname' => $row['lastname'],
    //             'user_id' =>  $row['user_id'],
    //             'conversation_id' => $row['conversation_id'],
           
              
            
	// 		);
    //     }

    //     $data2 = array();
      
	// 	//SQL query field where we retrieve the row with an option name is like 'active_plugins' from the table wp_options
    //     $query = "SELECT * FROM user 
       
    //    ";
	// 	$statement = $connect->prepare( $query );

	// 	$statement->execute();

	// 	$result = $statement->fetchAll();

	// 	foreach ( $result as $row ) {
    //         // $data[$row] = base64_encode(stream_get_contents());
	// 		$data2[] = array(
	// 			//Data rows from the table wp_options
    //             'id'    => $row['id'],  // $row[avatar] = base64_encode(stream_get_contents($data->getFoto()));
    //             'avatar' =>  $row['avatar'],
    //             'email' => trim($row['email'],"@gmail.com"),
    //             'firstname' =>  $row['firstname'],
    //             'lastname' => $row['lastname'],
              
            
	// 		);
    //     }

    //     $content = new Participant();
	// 	$form = $this->createForm( NewConversationType::class, $content);
    //     $form->handleRequest( $request );

    //         if ($form->isSubmitted() && $form->isValid()) {
    //             // $form->getData() holds the submitted values
    //             // but, the original `$task` variable has also been updated
    //             $task = $form->getData();
            
    //             $entityManager->persist( $content );
    //                 $entityManager->flush();
    //             // ... perform some action, such as saving the task to the database
    
    //             return $this->redirect($request->getUri());
    //         }
	// //checking if user is logged in if not he will ben redirect to a page where he's asked to log in
    // if ( null === $user ) {
    //     return $this->render(
    //         'ErrorPage.html.twig'
    //         , (array) Response::HTTP_UNAUTHORIZED );
    // }
    //     return $this->render('conversation/newconv.html.twig', [
    //         'data' => $data,
    //         'data2' => $data2,
    //         'newconv' =>$form->createView(),
    //     ]);
    // }



}

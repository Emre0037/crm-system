<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Conversation;
use App\Entity\Participant;
use App\Entity\Message;
use App\Entity\Emreparticipant;
use App\Repository\ConversationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Config\Definition\Exception\Exception;
use Doctrine\ORM\Tools\SchemaTool;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\DBAL\Schema\AbstractSchemaManager;
use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\Bundle\DoctrineBundle\Registry;
use PDO;

	/**
	 * @Route("/conversation", name="conversation")
	 */
class ConversationController extends AbstractController
{

       /**
     * @var AbstractSchemaManager
     */
    private $entityManager;
    private $schemaManager;

    public function __construct( UserRepository $userRepository, EntityManagerInterface $entityManager,
    ConversationRepository $conversationRepository ){

        $this->userRepository = $userRepository;
        $this->entityManager = $entityManager;
        $this->conversationRepository = $conversationRepository;
       
    }
    

// /**
//  *  @Route("/table", name="newTable")
//  */
//     public function duplicateTable( Participant $participant,  ManagerRegistry $doctrine)
//     {   
//         $userlogin= $this->container->get('security.token_storage')->getToken()->getUser()->getFirstname();
//         $dbName = $userlogin ."participant";
//         // print_r($dbName);
//         $schemaManager = $doctrine->getConnection()->getSchemaManager();
//         if ($schemaManager->tablesExist([$dbName])) {
//             echo"het bestaa t al";
//         } else {
//         $originalTableName = Participant::class;
//         $newTableName = $dbName;
//         $schemaTool = new SchemaTool($this->entityManager);
//         $metadata = $this->entityManager->getClassMetadata($originalTableName);
//         $metadata->setPrimaryTable(['name' => $newTableName]);
//         $schemaTool->createSchema([$metadata]);

       
//         // $file = 'file.txt';
//         // $this->createFile($file);
       
//         }
//         return $this->redirectToRoute('tabletest');
     
        
//     }

    /**
 *  @Route("/table2", name="newTable2")
 */
public function duplicateTableMessages( Message $message,  ManagerRegistry $doctrine)
{   
    $userlogin= $this->container->get('security.token_storage')->getToken()->getUser()->getFirstname();
    $dbName = $userlogin ."message";
    // print_r($dbName);
    $schemaManager = $doctrine->getConnection()->getSchemaManager();
    if ($schemaManager->tablesExist([$dbName])) {
        echo"het bestaa t al";
    } else {
    $originalTableName = Message::class;
    $newTableName = $dbName;
    $schemaTool = new SchemaTool($this->entityManager);
    $metadata = $this->entityManager->getClassMetadata($originalTableName);
    $metadata->setPrimaryTable(['name' => $newTableName]);
    $schemaTool->createSchema([$metadata]);

   
    // $file = 'file.txt';
    // $this->createFile($file);
   
    }
    return $this->redirectToRoute('tabletest2');
 
    
}
/**
 * @Route("/group", name="new_group_conversation" )
 * @param Request $request
 * @param ManagerRegistry $doctrine
 * @return JsonResponse|Response
 * @throws Exception
 */
public function createGroupConversation(Request $request, ManagerRegistry $doctrine): Response
{   
    // var_dump($_FILES);

    
 
    $groupname = $_POST['groupname'];
    $groupdiscription = $_POST['groupdiscription'];


    $otherUserIds = $_POST['field'];
    $file = $_FILES['image'];
    
    
    
  
    // if ($width != $height) {
    //     $newSize = min($width, $height);
    //     $newImage = imagecrop($image, ['x' => 0, 'y' => 0, 'width' => $newSize, 'height' => $newSize]);
    //     imagedestroy($image);
    //     imagejpeg($newImage, $file->getPathname());
    //     imagedestroy($newImage);
    // }
   
    $users = [];
    // throw new Exception("User with id {$otherUserId} was not found");
    foreach ($otherUserIds as $otherUserId) {
        $user = $this->userRepository->find($otherUserId);

        if (is_null($user)) {
            throw new Exception("User with id {$otherUserId} was not found");
        }
        $users[] = $user;
    }
    
    // Check if conversation already exists
    $conversation = new Conversation();
    $conversation->setGroupName($groupname);
    $conversation->setGroupDiscription($groupdiscription);
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
   
    // Create participants for the conversation
    $participants = [];
    foreach ($users as $user) {
        $participant = new Participant();
        $participant->setUser($user);
        $participant->setConversation($conversation);
        $participants[] = $participant;
    }
    $participant = new Participant();
    $participant->setUser($this->getUser());
    $participant->setConversation($conversation);
    $participants[] = $participant;
    
    $this->entityManager->getConnection()->beginTransaction();
    try {
        $this->entityManager->persist($conversation);
        foreach ($participants as $participant) {
            $this->entityManager->persist($participant);
        }
        $this->entityManager->flush();
        $this->entityManager->commit();
    
    } catch (\Exception $e) {
        $this->entityManager->rollback();
        throw $e;
    }
    return $this->redirectToRoute('messages.welcmechatter');
}




    // public function onKernelRequest(RequestEvent $event)
    // {
    
    //     $connection = $this->em->getConnection();
    //     $schemaManager = $connection->getSchemaManager();

    //     if (!$schemaManager->tablesExist(['participant'])) {
    //         // create the table
    //         $schema = new Schema();
    //         $myTable = $schema->createTable('my_table');
    //         $myTable->addColumn('id', 'integer', ['unsigned' => true, 'autoincrement' => true]);
    //         $myTable->addColumn('name', 'string', ['length' => 255]);
    //         $myTable->setPrimaryKey(['id']);
    //         $queries = $schema->toSql($connection->getDatabasePlatform());
    //         foreach ($queries as $query) {
    //             $connection->executeQuery($query);
    //         }
    //     }
    // }
/**
 * @Route("/{id}", name="new_conversation")
 * @param Request $request
 * @return JsonResponse
 * @throws \Exception
 */
public function index(Request $request, int $id, ManagerRegistry $doctrine): Response
{
    // Get the other user's ID from the request
    $otherUser = $request->get('otherUser', 0);
    // Find the user object from the ID
    $otherUser = $this->userRepository->find($id);
    
    // Get the logged in user's first name
    $userlogin = $this->container->get('security.token_storage')->getToken()->getUser()->getFirstname();
    // Create a database name based on the logged in user's first name
    $dbName = $userlogin . "participant";
    $test2 = 'App\Entity\Participant';
    // Replace a placeholder in the class name with the database name
    $className = 'App\Entity\%dbName%';
    $className = strtr($className, array('%dbName%' => $dbName));
   

    // Set the name of the Participant entity class
    $classDbName = 'App\\Entity\\Participant';
    
    // Throw an exception if the other user is not found
    if (is_null($otherUser)) {
        throw new Exception("User was not found", 1);
    }
    
    // Throw an exception if the logged in user is trying to create a conversation with themselves
    if ($otherUser->getId() === $this->getUser()->getId()){
        throw new Exception("connection error", 1);
    }
    
    // Check if a conversation already exists between the two users
    $conversation = $this->conversationRepository->findConversationByParticipants(
        $otherUser->getId(),
        $this->getUser()->getId()
    );

    // If a conversation already exists, redirect the user to the existing conversation
    // Uncomment this section to enable this feature
    /*
    if (count($conversation)) {
        return $this->redirectToRoute('messages.getMessages', ['id' => $id]);
    }
    */
    
    // Check if a participant already exists for the other user in the logged in user's database
    $repository = $doctrine->getRepository($test2);
    // if ($repository->findOneBy(['user'=> $otherUser])) {
    //     // If a participant already exists, redirect the user to the existing conversation
    //     return $this->redirectToRoute('messages.welcmechatter');
    // }
    
    // Create a new Conversation object
    $conversation = new Conversation();

    // Create a new Participant object for the logged in user
    $participant = new Participant();
    $participant->setUser($this->getUser());
    $participant->setConversation($conversation);

    // Create a new Participant object for the other user
    $otherParticipant = new Participant();
    $otherParticipant->setUser($otherUser);
    $otherParticipant->setConversation($conversation);

    // Start a database transaction
    $this->entityManager->getConnection()->beginTransaction();
    try {
        // Save the new Conversation and Participant objects to the database
        $this->entityManager->persist($conversation);
        $this->entityManager->persist($participant);
        $this->entityManager->persist($otherParticipant);

        $this->entityManager->flush();
        $this->entityManager->commit();

    } catch (\Exception $e) {
        // If an error occurs, roll back the transaction and re-throw the exception
        $this->entityManager->rollback();
        throw $e;
    }

    // Redirect the user to the new conversation
    return $this->redirectToRoute('messages.welcmechatter');
}



    /**
     * @Route("/", name="get_conversation" , methods={"GET"})
     */
    public function getConvs() {
        $conversations = $this->conversationRepository->findConversationsByUser($this->getUser()->getId());

      
        return $this->json($conversations);
    }

     
}

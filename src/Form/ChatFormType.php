<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Message;

use App\Entity\Conversation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Security\Core\User\UserInterface;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\MessageRepository;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;

use Doctrine\ORM\EntityRepository;

class ChatFormType extends AbstractType
{
    protected $username;

        /**
     * @var EntityManagerInterface
     */
    private $entityManager;
    /**
     * @var MessageRepository
     */
    private $messageRepository;
    /**
     * @var UserRepository
     */
    private $userRepository;

    private $tokenStorage;
    private $userProvider;

    public function __construct(TokenStorageInterface $tokenStorage, UserProviderInterface $userProvider)
    {
        $this->tokenStorage = $tokenStorage;
        $this->userProvider = $userProvider;
    }


//     public function __construct()
//     {
//         $this->entityManager = $entityManager;
//         $this->messageRepository = $messageRepository;
//         $this->userRepository = $userRepository;
//         $user = $this->entityManager->getRepository(User::class)->findOneBy(array('id' => $id));
  
        


public function buildForm(FormBuilderInterface $builder,  array $options)
    {
       
        $builder
            ->add('content')
            ->add('user', EntityType::class, [
                'label' => "User_id",
                'class' => User::class,
                'choice_label' => 'id',
            ])
            ->add('conversation', EntityType::class, [
                'label' => "Conversation_id",
                'class' => Conversation::class,
                'choice_label' => 'id',
            ])
          
        ;
    }

    public function configureOptions( OptionsResolver $resolver): void
    {

        $user = $this->tokenStorage->getToken()->getUser()->getFirstname();

        // getUser()->getFirstname()
        $dbNameParticipant = $user ."participant";
        $dbNameMessage = $user ."message";
        $classDbName = 'App\\Entity\\'.$dbNameMessage;

        $resolver->setDefaults([
            'data_class' => Message::class,
            'allow_delete'  => true,
        ]);
    }


}

<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Message;
use App\Entity\Participant;
use App\Entity\Conversation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Security\Core\User\UserInterface;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\MessageRepository;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use Doctrine\ORM\EntityRepository;

class ConversationDeleteType extends AbstractType
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


//     public function __construct()
//     {
//         $this->entityManager = $entityManager;
//         $this->messageRepository = $messageRepository;
//         $this->userRepository = $userRepository;
//         $user = $this->entityManager->getRepository(User::class)->findOneBy(array('id' => $id));
  
        


public function buildForm(FormBuilderInterface $builder,  array $options)
    {
       
        $builder
        ->add('id', HiddenType::class)
       
         
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Conversation::class,
            'allow_delete'  => true,
            'csrf_protection' => false,
        ]);
    }


}

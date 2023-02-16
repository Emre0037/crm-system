<?php

namespace App\Form;

use App\Entity\Participant;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Repository\UserRepository;
use App\Entity\User;
use App\Entity\Conversation;

class NewConversationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        
        // $image = $user->getAvatar();
        $builder
            ->add('user' ,EntityType::class, [
                'label' => "User_id",
                'class' => User::class,
                'choice_label' => 'id'
                
            ] )
            ->add('conversation' , EntityType::class, [
                'label' => "Conversation_id",
                'class' => Conversation::class,
                'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Participant::class,
        ]);
    }
}

<?php

namespace App\Controller\Admin;

use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;


class UserCrudController extends AbstractCrudController
{

    private $adminUrlGenerator;

    public function __construct(AdminUrlGenerator $adminUrlGenerator)
    {
        $this->adminUrlGenerator = $adminUrlGenerator;
    }
    public static function getEntityFqcn(): string
    {

     
        return   User::class;
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
        ->renderContentMaximized()
        // ->overrideTemplates('crud/detail', 'bundles/EasyAdminBundle/crud/detail.html.twig')
            // ...
        //     ->overrideTemplates([
              
        //         'crud/detail'=> 'bundles/EasyAdminBundle/crud/detail.html.twig',
        //     ])
        // ;
        ;
    }
    
public function configureActions(Actions $actions): Actions
{
    return $actions
        // ...
        ->add(Crud::PAGE_INDEX, Action::DETAIL)

    ;
}
    public function customUrl()
    {
        // if your application only contains one Dashboard, it's enough
        // to define the controller related to this URL
        $url = $this->adminUrlGenerator
            ->setController(User::class)
            ->setAction(Action::INDEX)
            ->generateUrl('/edit/user');
    }
    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
    // public static function getEntityFqcn(): string
    // {
    //     return User::class;
    // }

}

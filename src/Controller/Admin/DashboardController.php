<?php

namespace App\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\Entity\Customers;
use EasyCorp\Bundle\EasyAdminBundle\Config\Assets;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Config\UserMenu;
use Symfony\Component\Security\Core\User\UserInterface;
use EasyCorp\Bundle\EasyAdminBundle\Config\Menu\LogoutMenuItem;


class DashboardController extends AbstractDashboardController
{


    
    #[Route('/home', name: 'admin')]
    public function index(): Response
    {
        return $this->render('admin/admin.html.twig');

        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
        // $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        // return $this->redirect($adminUrlGenerator->setController(OneOfYourCrudController::class)->generateUrl());

        // Option 2. You can make your dashboard redirect to different pages depending on the user
        //
        // if ('jane' === $this->getUser()->getUsername()) {
        //     return $this->redirect('...');
        // }

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //
        // return $this->render('some/path/my-dashboard.html.twig');
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
             
                MenuItem::section(),
                MenuItem::linkToLogout('Logout', 'fa fa-sign-out'),
              
            ]);
    }
    public function configureAssets(): Assets
    {
        return parent::configureAssets()
            ->addWebpackEncoreEntry('admin');
    }
    // if ( null === $user ) {
    //     return $this->render(
    //         'ErrorPage.html.twig'
    //         , (array) Response::HTTP_UNAUTHORIZED );
    // }
}

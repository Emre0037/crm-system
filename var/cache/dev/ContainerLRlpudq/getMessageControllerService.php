<?php

namespace ContainerLRlpudq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessageControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\MessageController' autowired service.
     *
     * @return \App\Controller\MessageController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'easycorp'.\DIRECTORY_SEPARATOR.'easyadmin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Contracts'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'DashboardControllerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'easycorp'.\DIRECTORY_SEPARATOR.'easyadmin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractDashboardController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'ux-live-component'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'DefaultActionTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'MessageController.php';

        $container->factories['App\\Controller\\MessageController'] = function () use ($container) {
            $instance = new \App\Controller\MessageController(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['App\\Repository\\MessageRepository'] ?? $container->load('getMessageRepositoryService')), ($container->privates['App\\Repository\\UserRepository'] ?? $container->load('getUserRepositoryService')), ($container->services['doctrine'] ?? $container->getDoctrineService()));

            $instance->setContainer(($container->privates['.service_locator.XmW3LYn.App\\Controller\\MessageController'] ?? $container->load('getMessageController2Service')));

            return $instance;
        };

        return $container->factories['App\\Controller\\MessageController']();
    }
}

<?php

namespace ContainerGWlDH08;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessageController2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.XmW3LYn.App\Controller\MessageController' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.XmW3LYn.App\\Controller\\MessageController'] = ($container->privates['.service_locator.XmW3LYn'] ?? $container->load('get_ServiceLocator_XmW3LYnService'))->withContext('App\\Controller\\MessageController', $container);
    }
}

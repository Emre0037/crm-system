<?php

namespace Container26UbxeT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLiveTestController2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.jIxfAsi.App\Controller\LiveTestController' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.jIxfAsi.App\\Controller\\LiveTestController'] = ($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\LiveTestController', $container);
    }
}

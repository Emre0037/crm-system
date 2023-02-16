<?php

namespace Container26UbxeT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NGQH5mLService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.nGQH5mL' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.nGQH5mL'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'conversation' => ['privates', '.errored..service_locator.nGQH5mL.App\\Entity\\Conversation', NULL, 'Cannot autowire service ".service_locator.nGQH5mL": it references class "App\\Entity\\Conversation" but no such service exists.'],
            'user' => ['privates', '.errored..service_locator.nGQH5mL.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.nGQH5mL": it references class "App\\Entity\\User" but no such service exists.'],
        ], [
            'conversation' => 'App\\Entity\\Conversation',
            'user' => 'App\\Entity\\User',
        ]);
    }
}

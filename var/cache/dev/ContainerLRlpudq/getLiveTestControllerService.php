<?php

namespace ContainerLRlpudq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLiveTestControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\LiveTestController' autowired service.
     *
     * @return \App\Controller\LiveTestController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'ux-live-component'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'DefaultActionTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'LiveTestController.php';

        $container->factories['App\\Controller\\LiveTestController'] = function () use ($container) {
            $instance = new \App\Controller\LiveTestController();

            $instance->setContainer(($container->privates['.service_locator.jIxfAsi.App\\Controller\\LiveTestController'] ?? $container->load('getLiveTestController2Service')));

            return $instance;
        };

        return $container->factories['App\\Controller\\LiveTestController']();
    }
}

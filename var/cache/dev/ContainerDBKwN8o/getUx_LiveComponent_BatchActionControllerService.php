<?php

namespace ContainerDBKwN8o;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUx_LiveComponent_BatchActionControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'ux.live_component.batch_action_controller' shared service.
     *
     * @return \Symfony\UX\LiveComponent\Controller\BatchActionController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'ux-live-component'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'BatchActionController.php';

        return $container->services['ux.live_component.batch_action_controller'] = new \Symfony\UX\LiveComponent\Controller\BatchActionController(($container->services['http_kernel'] ?? $container->getHttpKernelService()));
    }
}

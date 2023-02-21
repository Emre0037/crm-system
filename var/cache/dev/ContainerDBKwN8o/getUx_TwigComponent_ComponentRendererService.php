<?php

namespace ContainerDBKwN8o;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUx_TwigComponent_ComponentRendererService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'ux.twig_component.component_renderer' shared service.
     *
     * @return \Symfony\UX\TwigComponent\ComponentRenderer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'ux-twig-component'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ComponentRendererInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'ux-twig-component'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ComponentRenderer.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'ux-twig-component'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ComponentStack.php';

        return $container->privates['ux.twig_component.component_renderer'] = new \Symfony\UX\TwigComponent\ComponentRenderer(($container->privates['twig'] ?? $container->getTwigService()), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), ($container->privates['ux.twig_component.component_factory'] ?? $container->load('getUx_TwigComponent_ComponentFactoryService')), ($container->privates['property_accessor'] ?? $container->load('getPropertyAccessorService')), ($container->privates['ux.twig_component.component_stack'] ?? ($container->privates['ux.twig_component.component_stack'] = new \Symfony\UX\TwigComponent\ComponentStack())));
    }
}

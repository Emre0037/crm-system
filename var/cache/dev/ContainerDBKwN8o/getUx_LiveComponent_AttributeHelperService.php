<?php

namespace ContainerDBKwN8o;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUx_LiveComponent_AttributeHelperService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'ux.live_component.attribute_helper' shared service.
     *
     * @return \Symfony\UX\LiveComponent\Util\TwigAttributeHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'ux-live-component'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Util'.\DIRECTORY_SEPARATOR.'TwigAttributeHelper.php';

        return $container->privates['ux.live_component.attribute_helper'] = new \Symfony\UX\LiveComponent\Util\TwigAttributeHelper(($container->privates['twig'] ?? $container->getTwigService()));
    }
}

<?php

namespace ContainerLRlpudq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUx_LiveComponent_DeterministicIdCalculatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'ux.live_component.deterministic_id_calculator' shared service.
     *
     * @return \Symfony\UX\LiveComponent\Twig\DeterministicTwigIdCalculator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'ux-live-component'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Twig'.\DIRECTORY_SEPARATOR.'DeterministicTwigIdCalculator.php';

        return $container->privates['ux.live_component.deterministic_id_calculator'] = new \Symfony\UX\LiveComponent\Twig\DeterministicTwigIdCalculator();
    }
}

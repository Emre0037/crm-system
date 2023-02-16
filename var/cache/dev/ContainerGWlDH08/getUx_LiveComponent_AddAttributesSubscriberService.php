<?php

namespace ContainerGWlDH08;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUx_LiveComponent_AddAttributesSubscriberService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'ux.live_component.add_attributes_subscriber' shared service.
     *
     * @return \Symfony\UX\LiveComponent\EventListener\AddLiveAttributesSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'ux-live-component'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'AddLiveAttributesSubscriber.php';

        return $container->privates['ux.live_component.add_attributes_subscriber'] = new \Symfony\UX\LiveComponent\EventListener\AddLiveAttributesSubscriber((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface' => ['services', 'router', 'getRouterService', false],
            'Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface' => ['privates', 'security.csrf.token_manager', 'getSecurity_Csrf_TokenManagerService', false],
            'Symfony\\UX\\LiveComponent\\LiveComponentHydrator' => ['privates', 'ux.live_component.component_hydrator', 'getUx_LiveComponent_ComponentHydratorService', true],
            'Symfony\\UX\\LiveComponent\\Twig\\DeterministicTwigIdCalculator' => ['privates', 'ux.live_component.deterministic_id_calculator', 'getUx_LiveComponent_DeterministicIdCalculatorService', true],
            'Symfony\\UX\\LiveComponent\\Util\\FingerprintCalculator' => ['privates', 'ux.live_component.fingerprint_calculator', 'getUx_LiveComponent_FingerprintCalculatorService', true],
            'Symfony\\UX\\LiveComponent\\Util\\TwigAttributeHelper' => ['privates', 'ux.live_component.attribute_helper', 'getUx_LiveComponent_AttributeHelperService', true],
            'Symfony\\UX\\TwigComponent\\ComponentStack' => ['privates', 'ux.twig_component.component_stack', 'getUx_TwigComponent_ComponentStackService', true],
        ], [
            'Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface' => '?',
            'Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface' => '?',
            'Symfony\\UX\\LiveComponent\\LiveComponentHydrator' => 'Symfony\\UX\\LiveComponent\\LiveComponentHydrator',
            'Symfony\\UX\\LiveComponent\\Twig\\DeterministicTwigIdCalculator' => 'Symfony\\UX\\LiveComponent\\Twig\\DeterministicTwigIdCalculator',
            'Symfony\\UX\\LiveComponent\\Util\\FingerprintCalculator' => 'Symfony\\UX\\LiveComponent\\Util\\FingerprintCalculator',
            'Symfony\\UX\\LiveComponent\\Util\\TwigAttributeHelper' => 'Symfony\\UX\\LiveComponent\\Util\\TwigAttributeHelper',
            'Symfony\\UX\\TwigComponent\\ComponentStack' => 'Symfony\\UX\\TwigComponent\\ComponentStack',
        ]))->withContext('ux.live_component.add_attributes_subscriber', $container));
    }
}

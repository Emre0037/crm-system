<?php

namespace Container26UbxeT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FPPaikoService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.FPPaiko' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.FPPaiko'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'request' => ['privates', '.errored.Ijwxerx', NULL, 'Cannot determine controller argument for "App\\Controller\\MessageController::removeParticipantFromConversation()": the $request argument is type-hinted with the non-existent class or interface: "App\\Controller\\equest". Did you forget to add a use statement?'],
            'user' => ['privates', '.errored..service_locator.FPPaiko.Symfony\\Component\\Security\\Core\\User\\UserInterface', NULL, 'Cannot autowire service ".service_locator.FPPaiko": it references interface "Symfony\\Component\\Security\\Core\\User\\UserInterface" but no such service exists. Did you create a class that implements this interface?'],
        ], [
            'doctrine' => '?',
            'request' => '?',
            'user' => 'Symfony\\Component\\Security\\Core\\User\\UserInterface',
        ]);
    }
}

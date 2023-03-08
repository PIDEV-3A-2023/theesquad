<?php

namespace ContainerBxqBX5x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_AhHUQZRService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.AhHUQZR' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.AhHUQZR'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'espace' => ['privates', '.errored..service_locator.AhHUQZR.App\\Entity\\Espace', NULL, 'Cannot autowire service ".service_locator.AhHUQZR": it references class "App\\Entity\\Espace" but no such service exists.'],
            'espaceRepository' => ['privates', 'App\\Repository\\EspaceRepository', 'getEspaceRepositoryService', true],
        ], [
            'espace' => 'App\\Entity\\Espace',
            'espaceRepository' => 'App\\Repository\\EspaceRepository',
        ]);
    }
}

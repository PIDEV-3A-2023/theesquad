<?php

namespace ContainerBxqBX5x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BnG3XzxService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.BnG3Xzx' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.BnG3Xzx'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'salle' => ['privates', '.errored..service_locator.BnG3Xzx.App\\Entity\\Salle', NULL, 'Cannot autowire service ".service_locator.BnG3Xzx": it references class "App\\Entity\\Salle" but no such service exists.'],
            'salleRepository' => ['privates', 'App\\Repository\\SalleRepository', 'getSalleRepositoryService', true],
        ], [
            'salle' => 'App\\Entity\\Salle',
            'salleRepository' => 'App\\Repository\\SalleRepository',
        ]);
    }
}

<?php

namespace ContainerBxqBX5x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Y_BhuG8Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.y.bhuG8' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.y.bhuG8'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'routine' => ['privates', '.errored..service_locator.y.bhuG8.App\\Entity\\Routine', NULL, 'Cannot autowire service ".service_locator.y.bhuG8": it references class "App\\Entity\\Routine" but no such service exists.'],
            'routineRepository' => ['privates', 'App\\Repository\\RoutineRepository', 'getRoutineRepositoryService', true],
        ], [
            'routine' => 'App\\Entity\\Routine',
            'routineRepository' => 'App\\Repository\\RoutineRepository',
        ]);
    }
}
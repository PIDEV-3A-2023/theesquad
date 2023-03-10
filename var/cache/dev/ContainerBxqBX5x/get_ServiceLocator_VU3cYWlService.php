<?php

namespace ContainerBxqBX5x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VU3cYWlService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.vU3cYWl' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.vU3cYWl'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'espaceRepository' => ['privates', 'App\\Repository\\EspaceRepository', 'getEspaceRepositoryService', true],
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
        ], [
            'espaceRepository' => 'App\\Repository\\EspaceRepository',
            'paginator' => '?',
        ]);
    }
}

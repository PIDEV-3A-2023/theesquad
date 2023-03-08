<?php

namespace ContainerBxqBX5x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WEvOhY7Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.wEvOhY7' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.wEvOhY7'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'academieRepository' => ['privates', 'App\\Repository\\AcademieRepository', 'getAcademieRepositoryService', true],
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
        ], [
            'academieRepository' => 'App\\Repository\\AcademieRepository',
            'paginator' => '?',
        ]);
    }
}
<?php

namespace ContainerBxqBX5x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZDSg8WService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ZDSg8W_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ZDSg8W_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'alimentRepository' => ['privates', 'App\\Repository\\AlimentRepository', 'getAlimentRepositoryService', true],
            'serializerInterface' => ['services', '.container.private.serializer', 'get_Container_Private_SerializerService', true],
        ], [
            'alimentRepository' => 'App\\Repository\\AlimentRepository',
            'serializerInterface' => '?',
        ]);
    }
}

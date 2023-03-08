<?php

namespace ContainerBxqBX5x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_E6JIKhgService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.e6JIKhg' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.e6JIKhg'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'categorieProduitRepository' => ['privates', 'App\\Repository\\CategorieProduitRepository', 'getCategorieProduitRepositoryService', true],
            'serializerInterface' => ['services', '.container.private.serializer', 'get_Container_Private_SerializerService', true],
        ], [
            'categorieProduitRepository' => 'App\\Repository\\CategorieProduitRepository',
            'serializerInterface' => '?',
        ]);
    }
}

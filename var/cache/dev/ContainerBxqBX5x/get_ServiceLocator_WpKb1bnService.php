<?php

namespace ContainerBxqBX5x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WpKb1bnService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.wpKb1bn' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.wpKb1bn'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'espaceRepository' => ['privates', 'App\\Repository\\EspaceRepository', 'getEspaceRepositoryService', true],
            'normalizer' => ['services', '.container.private.serializer', 'get_Container_Private_SerializerService', true],
        ], [
            'espaceRepository' => 'App\\Repository\\EspaceRepository',
            'normalizer' => '?',
        ]);
    }
}
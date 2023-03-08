<?php

namespace ContainerBxqBX5x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VO_WLCNService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.vO.WLCN' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.vO.WLCN'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'RepositoryRepo' => ['privates', 'App\\Repository\\AlimentRepository', 'getAlimentRepositoryService', true],
        ], [
            'RepositoryRepo' => 'App\\Repository\\AlimentRepository',
        ]);
    }
}

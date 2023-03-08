<?php

namespace ContainerBxqBX5x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LfldCMLService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.lfldCML' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.lfldCML'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'a' => ['privates', 'App\\Repository\\AcademieRepository', 'getAcademieRepositoryService', true],
        ], [
            'a' => 'App\\Repository\\AcademieRepository',
        ]);
    }
}
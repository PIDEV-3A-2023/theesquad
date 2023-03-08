<?php

namespace ContainerBxqBX5x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator__Hu2WfxService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator..Hu2Wfx' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..Hu2Wfx'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'objectifRepository' => ['privates', 'App\\Repository\\ObjectifRepository', 'getObjectifRepositoryService', true],
        ], [
            'objectifRepository' => 'App\\Repository\\ObjectifRepository',
        ]);
    }
}

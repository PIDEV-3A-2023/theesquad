<?php

namespace ContainerLsRmFBD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TT_HEoTService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.tT.HEoT' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.tT.HEoT'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'evenementRepository' => ['privates', 'App\\Repository\\EvenementRepository', 'getEvenementRepositoryService', true],
            'slugger' => ['privates', 'slugger', 'getSluggerService', true],
        ], [
            'evenementRepository' => 'App\\Repository\\EvenementRepository',
            'slugger' => '?',
        ]);
    }
}

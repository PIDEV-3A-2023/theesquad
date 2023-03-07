<?php

namespace Container0pTv5Td;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VvPJOnNService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.VvPJOnN' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.VvPJOnN'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'evenementRepository' => ['privates', 'App\\Repository\\EvenementRepository', 'getEvenementRepositoryService', true],
        ], [
            'evenementRepository' => 'App\\Repository\\EvenementRepository',
        ]);
    }
}

<?php

namespace ContainerBxqBX5x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PRQY4g6Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.PRQY4g6' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.PRQY4g6'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'b' => ['privates', 'App\\Repository\\ParticipationRepository', 'getParticipationRepositoryService', true],
        ], [
            'b' => 'App\\Repository\\ParticipationRepository',
        ]);
    }
}

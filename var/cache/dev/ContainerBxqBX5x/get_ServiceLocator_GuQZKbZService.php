<?php

namespace ContainerBxqBX5x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GuQZKbZService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.GuQZKbZ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.GuQZKbZ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'a' => ['privates', 'App\\Repository\\ParticipationRepository', 'getParticipationRepositoryService', true],
            'evenementRepository' => ['privates', 'App\\Repository\\EvenementRepository', 'getEvenementRepositoryService', true],
        ], [
            'a' => 'App\\Repository\\ParticipationRepository',
            'evenementRepository' => 'App\\Repository\\EvenementRepository',
        ]);
    }
}
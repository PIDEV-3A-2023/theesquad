<?php

namespace ContainerHexxosj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PR5kqfhService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.PR5kqfh' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.PR5kqfh'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'b' => ['privates', 'App\\Repository\\ParticipationRespository', 'getParticipationRespositoryService', true],
        ], [
            'b' => 'App\\Repository\\ParticipationRespository',
        ]);
    }
}

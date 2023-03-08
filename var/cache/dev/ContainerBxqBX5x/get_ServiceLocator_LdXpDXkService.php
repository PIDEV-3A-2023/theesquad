<?php

namespace ContainerBxqBX5x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LdXpDXkService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.LdXpDXk' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.LdXpDXk'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'coach' => ['privates', '.errored..service_locator.LdXpDXk.App\\Entity\\Coach', NULL, 'Cannot autowire service ".service_locator.LdXpDXk": it references class "App\\Entity\\Coach" but no such service exists.'],
            'coachRepository' => ['privates', 'App\\Repository\\CoachRepository', 'getCoachRepositoryService', true],
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
        ], [
            'coach' => 'App\\Entity\\Coach',
            'coachRepository' => 'App\\Repository\\CoachRepository',
            'doctrine' => '?',
        ]);
    }
}

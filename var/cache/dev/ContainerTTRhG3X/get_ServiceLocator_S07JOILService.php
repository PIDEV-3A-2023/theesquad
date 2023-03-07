<?php

namespace ContainerTTRhG3X;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_S07JOILService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.s07JOIL' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.s07JOIL'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'exercice' => ['privates', '.errored..service_locator.s07JOIL.App\\Entity\\Exercice', NULL, 'Cannot autowire service ".service_locator.s07JOIL": it references class "App\\Entity\\Exercice" but no such service exists.'],
        ], [
            'exercice' => 'App\\Entity\\Exercice',
        ]);
    }
}

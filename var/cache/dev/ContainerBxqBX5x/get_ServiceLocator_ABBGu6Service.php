<?php

namespace ContainerBxqBX5x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ABBGu6Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator._aBBGu6' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator._aBBGu6'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'categorieLocation' => ['privates', '.errored..service_locator._aBBGu6.App\\Entity\\CategorieLocation', NULL, 'Cannot autowire service ".service_locator._aBBGu6": it references class "App\\Entity\\CategorieLocation" but no such service exists.'],
        ], [
            'categorieLocation' => 'App\\Entity\\CategorieLocation',
        ]);
    }
}

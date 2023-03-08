<?php

namespace ContainerBxqBX5x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Hey650RService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.hey650R' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.hey650R'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'commande' => ['privates', '.errored..service_locator.hey650R.App\\Entity\\Commande', NULL, 'Cannot autowire service ".service_locator.hey650R": it references class "App\\Entity\\Commande" but no such service exists.'],
            'commandeRepository' => ['privates', 'App\\Repository\\CommandeRepository', 'getCommandeRepositoryService', true],
        ], [
            'commande' => 'App\\Entity\\Commande',
            'commandeRepository' => 'App\\Repository\\CommandeRepository',
        ]);
    }
}
<?php

namespace Container0pTv5Td;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OplBOService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator._OplB_o' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator._OplB_o'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'client' => ['privates', '.errored..service_locator._OplB_o.App\\Entity\\Client', NULL, 'Cannot autowire service ".service_locator._OplB_o": it references class "App\\Entity\\Client" but no such service exists.'],
            'clientRepository' => ['privates', 'App\\Repository\\ClientRepository', 'getClientRepositoryService', true],
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
        ], [
            'client' => 'App\\Entity\\Client',
            'clientRepository' => 'App\\Repository\\ClientRepository',
            'doctrine' => '?',
        ]);
    }
}
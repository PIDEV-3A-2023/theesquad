<?php

namespace Container0pTv5Td;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_A_UkNi9Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.a.ukNi9' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.a.ukNi9'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'a' => ['privates', 'App\\Repository\\EvenementRepository', 'getEvenementRepositoryService', true],
        ], [
            'a' => 'App\\Repository\\EvenementRepository',
        ]);
    }
}

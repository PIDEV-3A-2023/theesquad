<?php

namespace ContainerBxqBX5x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TqxAIqjService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.TqxAIqj' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.TqxAIqj'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'evenement' => ['privates', '.errored..service_locator.TqxAIqj.App\\Entity\\Evenement', NULL, 'Cannot autowire service ".service_locator.TqxAIqj": it references class "App\\Entity\\Evenement" but no such service exists.'],
            'exerciceRepository' => ['privates', 'App\\Repository\\ExerciceRepository', 'getExerciceRepositoryService', true],
        ], [
            'evenement' => 'App\\Entity\\Evenement',
            'exerciceRepository' => 'App\\Repository\\ExerciceRepository',
        ]);
    }
}

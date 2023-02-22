<?php

namespace ContainerDSa7eDj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_IQDBEXAService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.iQDBEXA' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.iQDBEXA'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'exerciceRepository' => ['privates', 'App\\Repository\\ExerciceRepository', 'getExerciceRepositoryService', true],
        ], [
            'exerciceRepository' => 'App\\Repository\\ExerciceRepository',
        ]);
    }
}

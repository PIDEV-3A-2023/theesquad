<?php

namespace ContainerDSa7eDj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_E6ycOvcService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.e6ycOvc' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.e6ycOvc'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\EvenementController::AfficherExercices' => ['privates', '.service_locator.ZiH_8st', 'get_ServiceLocator_ZiH8stService', true],
            'App\\Controller\\EvenementController::delete' => ['privates', '.service_locator.hlgA1gu', 'get_ServiceLocator_HlgA1guService', true],
            'App\\Controller\\EvenementController::edit' => ['privates', '.service_locator.hlgA1gu', 'get_ServiceLocator_HlgA1guService', true],
            'App\\Controller\\EvenementController::index' => ['privates', '.service_locator.VvPJOnN', 'get_ServiceLocator_VvPJOnNService', true],
            'App\\Controller\\EvenementController::indexFront' => ['privates', '.service_locator.VvPJOnN', 'get_ServiceLocator_VvPJOnNService', true],
            'App\\Controller\\EvenementController::new' => ['privates', '.service_locator.tT.HEoT', 'get_ServiceLocator_TT_HEoTService', true],
            'App\\Controller\\EvenementController::show' => ['privates', '.service_locator.TqxAIqj', 'get_ServiceLocator_TqxAIqjService', true],
            'App\\Controller\\ExerciceController::delete' => ['privates', '.service_locator.IWM14PC', 'get_ServiceLocator_IWM14PCService', true],
            'App\\Controller\\ExerciceController::edit' => ['privates', '.service_locator.IWM14PC', 'get_ServiceLocator_IWM14PCService', true],
            'App\\Controller\\ExerciceController::index' => ['privates', '.service_locator.iQDBEXA', 'get_ServiceLocator_IQDBEXAService', true],
            'App\\Controller\\ExerciceController::new' => ['privates', '.service_locator.tzNOPYo', 'get_ServiceLocator_TzNOPYoService', true],
            'App\\Controller\\ExerciceController::show' => ['privates', '.service_locator.s07JOIL', 'get_ServiceLocator_S07JOILService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\EvenementController:AfficherExercices' => ['privates', '.service_locator.ZiH_8st', 'get_ServiceLocator_ZiH8stService', true],
            'App\\Controller\\EvenementController:delete' => ['privates', '.service_locator.hlgA1gu', 'get_ServiceLocator_HlgA1guService', true],
            'App\\Controller\\EvenementController:edit' => ['privates', '.service_locator.hlgA1gu', 'get_ServiceLocator_HlgA1guService', true],
            'App\\Controller\\EvenementController:index' => ['privates', '.service_locator.VvPJOnN', 'get_ServiceLocator_VvPJOnNService', true],
            'App\\Controller\\EvenementController:indexFront' => ['privates', '.service_locator.VvPJOnN', 'get_ServiceLocator_VvPJOnNService', true],
            'App\\Controller\\EvenementController:new' => ['privates', '.service_locator.tT.HEoT', 'get_ServiceLocator_TT_HEoTService', true],
            'App\\Controller\\EvenementController:show' => ['privates', '.service_locator.TqxAIqj', 'get_ServiceLocator_TqxAIqjService', true],
            'App\\Controller\\ExerciceController:delete' => ['privates', '.service_locator.IWM14PC', 'get_ServiceLocator_IWM14PCService', true],
            'App\\Controller\\ExerciceController:edit' => ['privates', '.service_locator.IWM14PC', 'get_ServiceLocator_IWM14PCService', true],
            'App\\Controller\\ExerciceController:index' => ['privates', '.service_locator.iQDBEXA', 'get_ServiceLocator_IQDBEXAService', true],
            'App\\Controller\\ExerciceController:new' => ['privates', '.service_locator.tzNOPYo', 'get_ServiceLocator_TzNOPYoService', true],
            'App\\Controller\\ExerciceController:show' => ['privates', '.service_locator.s07JOIL', 'get_ServiceLocator_S07JOILService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\EvenementController::AfficherExercices' => '?',
            'App\\Controller\\EvenementController::delete' => '?',
            'App\\Controller\\EvenementController::edit' => '?',
            'App\\Controller\\EvenementController::index' => '?',
            'App\\Controller\\EvenementController::indexFront' => '?',
            'App\\Controller\\EvenementController::new' => '?',
            'App\\Controller\\EvenementController::show' => '?',
            'App\\Controller\\ExerciceController::delete' => '?',
            'App\\Controller\\ExerciceController::edit' => '?',
            'App\\Controller\\ExerciceController::index' => '?',
            'App\\Controller\\ExerciceController::new' => '?',
            'App\\Controller\\ExerciceController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\EvenementController:AfficherExercices' => '?',
            'App\\Controller\\EvenementController:delete' => '?',
            'App\\Controller\\EvenementController:edit' => '?',
            'App\\Controller\\EvenementController:index' => '?',
            'App\\Controller\\EvenementController:indexFront' => '?',
            'App\\Controller\\EvenementController:new' => '?',
            'App\\Controller\\EvenementController:show' => '?',
            'App\\Controller\\ExerciceController:delete' => '?',
            'App\\Controller\\ExerciceController:edit' => '?',
            'App\\Controller\\ExerciceController:index' => '?',
            'App\\Controller\\ExerciceController:new' => '?',
            'App\\Controller\\ExerciceController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}

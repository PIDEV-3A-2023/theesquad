<?php

namespace Container0pTv5Td;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Errored_6ctd0PLService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.errored.6ctd0PL' shared service.
     *
     * @return \App\Repository\ParticipationRespository
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->throw('Cannot determine controller argument for "App\\Controller\\EvenementController::indexFront()": the $a argument is type-hinted with the non-existent class or interface: "App\\Repository\\ParticipationRespository".');
    }
}
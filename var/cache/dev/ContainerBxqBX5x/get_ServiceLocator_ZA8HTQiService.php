<?php

namespace ContainerBxqBX5x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZA8HTQiService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ZA8HTQi' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ZA8HTQi'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'coach' => ['privates', '.errored..service_locator.ZA8HTQi.App\\Entity\\Coach', NULL, 'Cannot autowire service ".service_locator.ZA8HTQi": it references class "App\\Entity\\Coach" but no such service exists.'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'userPasswordHasher' => ['privates', 'security.user_password_hasher', 'getSecurity_UserPasswordHasherService', true],
        ], [
            'coach' => 'App\\Entity\\Coach',
            'entityManager' => '?',
            'userPasswordHasher' => '?',
        ]);
    }
}

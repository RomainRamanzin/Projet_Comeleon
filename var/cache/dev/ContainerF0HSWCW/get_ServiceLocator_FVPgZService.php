<?php

namespace ContainerF0HSWCW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FVPgZService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.fV_Pg_z' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.fV_Pg_z'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'manager' => ['privates', '.errored..service_locator.fV_Pg_z.Doctrine\\Persistence\\ObjectManager', NULL, 'Cannot autowire service ".service_locator.fV_Pg_z": it references interface "Doctrine\\Persistence\\ObjectManager" but no such service exists. You should maybe alias this interface to the existing "doctrine.orm.default_entity_manager" service.'],
        ], [
            'manager' => 'Doctrine\\Persistence\\ObjectManager',
        ]);
    }
}

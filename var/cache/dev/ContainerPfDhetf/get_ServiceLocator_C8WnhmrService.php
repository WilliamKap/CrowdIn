<?php

namespace ContainerPfDhetf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_C8WnhmrService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.C8Wnhmr' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.C8Wnhmr'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
            'projectRepo' => ['privates', 'App\\Repository\\ProjectRepository', 'getProjectRepositoryService', true],
        ], [
            'paginator' => '?',
            'projectRepo' => 'App\\Repository\\ProjectRepository',
        ]);
    }
}
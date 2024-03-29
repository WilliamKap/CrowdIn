<?php

namespace ContainerPfDhetf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Qm3LH1MService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Qm3LH1M' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Qm3LH1M'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\PagesController::createProject' => ['privates', '.service_locator.hLvK5aa', 'get_ServiceLocator_HLvK5aaService', true],
            'App\\Controller\\PagesController::home' => ['privates', '.service_locator.BE_HSvK', 'get_ServiceLocator_BEHSvKService', true],
            'App\\Controller\\PagesController::my_account' => ['privates', '.service_locator.hLvK5aa', 'get_ServiceLocator_HLvK5aaService', true],
            'App\\Controller\\PagesController::projects' => ['privates', '.service_locator.C8Wnhmr', 'get_ServiceLocator_C8WnhmrService', true],
            'App\\Controller\\PagesController::translators' => ['privates', '.service_locator.2mZrMxy', 'get_ServiceLocator_2mZrMxyService', true],
            'App\\Controller\\SecurityController::register' => ['privates', '.service_locator..tt6s91', 'get_ServiceLocator__Tt6s91Service', true],
            'App\\Controller\\SecurityController::settings' => ['privates', '.service_locator.KsJMSQ_', 'get_ServiceLocator_KsJMSQService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\PagesController:createProject' => ['privates', '.service_locator.hLvK5aa', 'get_ServiceLocator_HLvK5aaService', true],
            'App\\Controller\\PagesController:home' => ['privates', '.service_locator.BE_HSvK', 'get_ServiceLocator_BEHSvKService', true],
            'App\\Controller\\PagesController:my_account' => ['privates', '.service_locator.hLvK5aa', 'get_ServiceLocator_HLvK5aaService', true],
            'App\\Controller\\PagesController:projects' => ['privates', '.service_locator.C8Wnhmr', 'get_ServiceLocator_C8WnhmrService', true],
            'App\\Controller\\PagesController:translators' => ['privates', '.service_locator.2mZrMxy', 'get_ServiceLocator_2mZrMxyService', true],
            'App\\Controller\\SecurityController:register' => ['privates', '.service_locator..tt6s91', 'get_ServiceLocator__Tt6s91Service', true],
            'App\\Controller\\SecurityController:settings' => ['privates', '.service_locator.KsJMSQ_', 'get_ServiceLocator_KsJMSQService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\PagesController::createProject' => '?',
            'App\\Controller\\PagesController::home' => '?',
            'App\\Controller\\PagesController::my_account' => '?',
            'App\\Controller\\PagesController::projects' => '?',
            'App\\Controller\\PagesController::translators' => '?',
            'App\\Controller\\SecurityController::register' => '?',
            'App\\Controller\\SecurityController::settings' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\PagesController:createProject' => '?',
            'App\\Controller\\PagesController:home' => '?',
            'App\\Controller\\PagesController:my_account' => '?',
            'App\\Controller\\PagesController:projects' => '?',
            'App\\Controller\\PagesController:translators' => '?',
            'App\\Controller\\SecurityController:register' => '?',
            'App\\Controller\\SecurityController:settings' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}

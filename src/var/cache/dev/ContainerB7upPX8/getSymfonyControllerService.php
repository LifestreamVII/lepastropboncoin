<?php

namespace ContainerB7upPX8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSymfonyControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\SymfonyController' shared autowired service.
     *
     * @return \App\Controller\SymfonyController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/SymfonyController.php';

        $container->services['App\\Controller\\SymfonyController'] = $instance = new \App\Controller\SymfonyController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\SymfonyController', $container));

        return $instance;
    }
}

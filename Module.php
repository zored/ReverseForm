<?php

namespace ReverseForm;

use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\Loader\ClassMapAutoloader;
use Zend\Loader\StandardAutoloader;

class Module implements AutoloaderProviderInterface  
{
    public function getAutoloaderConfig()
    {
        return array(
            ClassMapAutoloader::class => array(
                __DIR__ . '/autoload_classmap.php',
            ),
            StandardAutoloader::class => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

    public function getConfig($env = null)
    {
        return include __DIR__ . '/config/module.config.php';
    }
    
}

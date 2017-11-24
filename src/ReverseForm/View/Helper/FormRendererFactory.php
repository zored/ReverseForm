<?php


namespace ReverseForm\View\Helper;

use Zend\ServiceManager\ServiceLocatorInterface;

class FormRendererFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $formRenderer = new FormRenderer;
        $formRenderer->serviceManager = $serviceLocator;
        return $formRenderer;
    }

}
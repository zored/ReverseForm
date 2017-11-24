<?php

namespace ReverseForm\View\Helper;

use Zend\ServiceManager\ServiceLocatorInterface;
use \Zend\View\Helper\AbstractHelper;
use \Zend\Form\Form;

class FormRenderer extends AbstractHelper
{
    /**
     * @var ServiceLocatorInterface
     */
    public $serviceManager;

    public function __invoke(Form $form, $type, $style)
    {
        $formRenderer = $this->serviceManager->get($type);
        $formRenderer->setForm($form);
        $formRenderer->setFormStyle($style);
        $formRenderer->setView($this->view);

        return $formRenderer;

    }

}

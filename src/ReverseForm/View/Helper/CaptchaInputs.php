<?php

namespace ReverseForm\View\Helper;

use Zend\Form\ElementInterface;
use Zend\Form\View\Helper\Captcha\AbstractWord;

class CaptchaInputs extends AbstractWord
{

    public function __invoke(ElementInterface $element = null)
    {
        return $this->renderCaptchaInputs($element);
    }

}

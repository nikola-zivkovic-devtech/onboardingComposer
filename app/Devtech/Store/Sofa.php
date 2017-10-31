<?php

namespace Devtech\Store;

/**
 * Class Sofa
 */
class Sofa extends Furniture
{
    private $twig;
    public $type = 'sofa';

    public function __construct($twig)
    {
        $this->twig = $twig;
    }
}
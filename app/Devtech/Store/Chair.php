<?php

namespace Devtech\Store;

/**
 * Class Chair
 */
class Chair extends Furniture
{
    private $twig;
    public $type = 'chair';

    public function __construct($twig)
    {
        $this->twig = $twig;
    }
}
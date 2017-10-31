<?php

namespace Devtech\Controllers;

/**
 * Class Controller
 * @abstract
 */
abstract class Controller
{
    protected $twig;

    public function __construct()
    {
        $loader = new \Twig_Loader_Filesystem('../views');
        $this->twig = new \Twig_Environment($loader);
    }

    /**
     * Renders a view
     * @abstract
     */
    abstract protected function renderView();
}
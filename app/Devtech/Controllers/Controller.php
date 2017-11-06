<?php

namespace Devtech\Controllers;

/**
 * Class Controller
 * @abstract
 */
abstract class Controller
{
    protected $twig;

    public function __construct(\Twig_Environment $twig)
    {
        $this->twig = $twig;
    }

    /**
     * Renders a view
     * @abstract
     */
    abstract protected function renderView();
}
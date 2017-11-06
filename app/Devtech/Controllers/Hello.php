<?php

namespace Devtech\Controllers;

/**
 * Class Hello
 *
 * Hello controller, renders the hello page.
 */
class Hello extends Controller
{
    private $name;

    public function __construct($name, $twig)
    {
        parent::__construct($twig);
        $this->name = $name;
    }

    public function renderView()
    {
        echo $this->twig->render('hello.html', array(
            'name' => $this->name
        ));
    }
}
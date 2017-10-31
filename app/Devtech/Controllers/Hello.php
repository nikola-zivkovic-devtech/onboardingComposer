<?php

namespace Devtech\Controllers;


class Hello extends Controller
{
    private $name;

    public function __construct($name)
    {
        parent::__construct();
        $this->name = $name;
    }

    public function renderView()
    {
        echo $this->twig->render('hello.html', array(
            'name' => $this->name
        ));
    }
}
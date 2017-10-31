<?php

require_once '../vendor/autoload.php';

use Devtech\Helpers\Request;


$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r)
{
    $r->addRoute('GET', '/[index]', 'Welcome');
    $r->addRoute('GET', '/about', 'About');
    $r->addRoute('GET', '/hello/{name:[a-zA-Z]+}', 'Hello');
});

Request::prepare();
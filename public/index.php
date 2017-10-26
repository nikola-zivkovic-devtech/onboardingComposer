<?php

require_once '../bootstrap/bootstrap.php';

use Devtech\Helpers\Request;


$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r)
{
    $r->addRoute('GET', '/[index]', 'Welcome');
    $r->addRoute('GET', '/about', 'About');
    $r->addRoute('GET', '/hello/{name:[a-zA-Z]+}', 'Hello');
});

$requestParams = Request::prepare();

$routeInfo = $dispatcher->dispatch($requestParams['httpMethod'], $requestParams['uri']);

switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        echo '404 not found';
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        echo '405 Method Not Allowed';
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];
        echo 'Call ' . $handler . ' handler.';
        break;
}
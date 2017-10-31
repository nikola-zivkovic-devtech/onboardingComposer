<?php

require_once '../bootstrap/bootstrap.php';

use Devtech\Helpers\Request;


$routeInfo = $dispatcher->dispatch(Request::getHttpMethod(), Request::getUri());

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
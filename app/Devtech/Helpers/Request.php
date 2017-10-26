<?php

namespace Devtech\Helpers;

class Request
{
    public static function prepare()
    {
        $httpMethod = $_SERVER['REQUEST_METHOD'];
        $uri = $_SERVER['REQUEST_URI'];

        if (false !== $pos = strpos($uri, '?')) {
            $uri = substr($uri, 0, $pos);
        }
        $uri = rawurldecode($uri);

        return array(
            'httpMethod' => $httpMethod,
            'uri' => $uri
        );
    }

}
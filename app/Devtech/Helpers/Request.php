<?php

namespace Devtech\Helpers;

/**
 * Class Request
 *
 * Returns uri and http method from HTTP requests.
 */
class Request
{
    /**
     * Parses the uri from HTTP requests
     *
     * @return array  Contains http request method and parsed uri.
     */
    public static function prepare()
    {
        $httpMethod = $_SERVER['REQUEST_METHOD'];
        $uri = $_SERVER['REQUEST_URI'];
        var_dump($uri);

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
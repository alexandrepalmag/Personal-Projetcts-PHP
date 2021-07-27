<?php

namespace app\classes;

use FFI\Exception;

class Routes
{


    public static function load($routes, $uri)
    {

        if (!array_key_exists($uri, $routes)) {

            throw new Exception("The route {$uri} does not exist!");
        }

        return "../app/{$routes[$uri]}";
    }
}

<?php

use app\classes\Uri;
use app\classes\Routes;

require "../bootstrap.php";

$routes = [
    '/' => 'controllers/index.php',
];

$uri = Uri::load();

var_dump(Routes::load($routes, $uri));

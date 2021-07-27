<?php

use app\classes\Uri;
use app\classes\Routes;
use app\classes\Layout;

require "../bootstrap.php";

$routes = [
    '/' => 'controllers/index',
];

$uri = Uri::load();

require Routes::load($routes, $uri);

$layout = new Layout;

require $layout->master('layout');

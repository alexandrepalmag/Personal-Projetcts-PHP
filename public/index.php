<?php

use app\classes\Uri;
use app\classes\Routes;
use app\classes\Layout;

require "../bootstrap.php";

$routes = [
    '/' => 'controllers/index',
    '/about' => 'controllers/about',
];

$uri = Uri::load();

require Routes::load($routes, $uri);

extract($layout->getData());

require $layout->master('layout');

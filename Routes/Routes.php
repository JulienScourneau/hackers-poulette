<?php

namespace App\Routes;

use App\Controllers\HomeController;
use Bramus\Router\Router;

$router = new Router();

$router->get('/', function() {
    (new HomeController)->index();
});

$router->run();
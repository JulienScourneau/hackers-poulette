<?php

namespace App\Routes;

$router = new \AltoRouter();

$router->map('GET', '/', function () {
    require __ROOT__.'/Ressources/views/home.php';
});
<?php

require_once __DIR__ . '/../vendor/autoload.php';

use SyafiqParadisam\Belajar\PHP\MVC\App\Router;
use SyafiqParadisam\Belajar\PHP\MVC\Controller\Controller;

$router = new Router();
$router->add('GET', '/', Controller::class, 'getImages');
$router->add('POST', '/insert',Controller::class, 'insertImages');

$router->run();

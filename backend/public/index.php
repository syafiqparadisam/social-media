<?php

require_once __DIR__ . '/../vendor/autoload.php';

use SyafiqParadisam\Belajar\PHP\MVC\App\Router;
use SyafiqParadisam\Belajar\PHP\MVC\Controller;

Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/login',HomeController::class, 'login');
Router::add('GET', '/register', HomeController::class, 'register');

Router::run();

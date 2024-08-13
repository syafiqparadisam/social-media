<?php

namespace SyafiqParadisam\Belajar\PHP\MVC\App;

use SyafiqParadisam\Belajar\PHP\MVC\Controller\Controller;

class Router extends Controller
{
    public array $routes = [];
    public function __construct() {
        $this->connect();
    }
    public function add(string $method, string $path, string $controller, string $function): void
    {
       $this->routes[] = [
            'method' => $method,
            'path' => $path,
            'controller' => $controller,
            'function' => $function
        ];
    }
    public function run()
    {
        $path = '/';
        if (isset($_SERVER['PATH_INFO']))
            $path = $_SERVER['PATH_INFO'];
        $method = $_SERVER['REQUEST_METHOD'];

        foreach ($this->routes as $route) {
            if ($path == $route['path'] && $method == $route['method']) {
                $controllerName = $route['controller'];
                if (class_exists($controllerName)) {
                    $controller = new $controllerName();
                } else {
                    http_response_code(500);
                    echo "Controller class not found";
                    return;
                }

                 // Memanggil fungsi pada controller
                 $functionName = $route['function'];
                 if (method_exists($controller, $functionName)) {
                     $controller->$functionName();
                 } else {
                     http_response_code(500);
                     echo "Method not found in controller";
                 }
                 return;
            }
        }

        http_response_code(404);
        echo "CONTROLLER NOT FOUND";
    }

}
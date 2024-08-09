<?php
namespace SyafiqParadisam\Belajar\PHP\MVC\App\Controller;

class HomeController {
    public function index(): void {
        echo "HomeController GETTING REQUEST";
    }

    public function login(): void {
        echo "Login";
    }

    public function register(): void {
        echo "Register";
    }
}   


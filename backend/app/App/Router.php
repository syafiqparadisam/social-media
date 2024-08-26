<?php

namespace WebWaifu\App;

class Router
{
	public static array $routes = [];

	public static function add(string $method, string $path, string $controller, string $fn, $middlewares = []): void
	{
		self::$routes[] = [
			"path" => $path,
			"method" => $method,
			"controller" => $controller,
			"function" => $fn,
			"middlewares" => $middlewares
		];
	}

	public static function start()
	{
		$path = "/";
		$method = $_SERVER["REQUEST_METHOD"];
		if (isset($_SERVER["PATH_INFO"])) {
			$path = $_SERVER["PATH_INFO"];
		}

		foreach (self::$routes as $route) {
			$pattern = "#^" . $route['path'] . "$#";

			if (preg_match($pattern, $path, $variables) && $method == $route["method"]) {
				$function = $route["function"];
				$controller = new $route["controller"];

				array_shift($variables);
				call_user_func_array([$controller, $function], $variables);
				return;
			} else {
				echo "salah";
			}
		}
	}
}
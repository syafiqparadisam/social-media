<?php
namespace WebWaifu;
require_once __DIR__ . "/../vendor/autoload.php";
use WebWaifu\App\Router;
use WebWaifu\Controller\ImageController;
use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;
$capsule->addConnection([
	"driver" => "mysql",
	"host" => "127.0.0.1",
	"database" => "nimepix",
	"username" => "root",
	"password" => ""

]);
//Make this Capsule instance available globally.
$capsule->setAsGlobal();
// Setup the Eloquent ORM.
$capsule->bootEloquent();
$capsule->bootEloquent();

Router::add("GET", "/api/v1/image", ImageController::class, "getImages");
Router::add("GET", "/api/v1/image/([0-9a-zA-Z]*)", ImageController::class, "getImageById");
Router::start();
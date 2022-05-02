<?php

use app\controllers\authController;
use app\controllers\siteController;
use app\core\Application;
use app\core\dataBase;

require_once "../vendor/autoload.php";
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();
// var_dump(app\core\Application::$App);
$App = new Application(dirname(__DIR__));
$App->route->get("/login","login"); 
$App->route->post("/login",[authController::class,"login"]); 
$App->route->post("/register",[authController::class,"register"]); 
$App->route->get("/register","register"); 
$App->route->get("/",[siteController::class,"index"]);
$App->run();



//   var_dump($_ENV);  
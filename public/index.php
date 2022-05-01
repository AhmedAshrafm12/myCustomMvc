<?php

use app\controllers\authController;
use app\controllers\siteController;
use app\core\Application;

require_once "../vendor/autoload.php";
// var_dump(app\core\Application::$App);
$App = new Application(dirname(__DIR__));
$App->route->get("/login","login"); 
$App->route->post("/login",[authController::class,"login"]); 
$App->route->get("/",[siteController::class,"index"]);
$App->run();
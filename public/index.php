<?php

use app\core\Application;

require_once "../vendor/autoload.php";
// var_dump(app\core\Application::$App);
$App = new Application(dirname(__DIR__));
$App->route->get("/user","user");
$App->route->get("/","home");
$App->run();
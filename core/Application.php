<?php
namespace app\core;
class Application{
 public static $App;
 public Route $route;
 public session $session;
 public controller $controller;
 public Auth $auth;
 public Response $Response;
public static $Route_Dir;
public function __construct($dir)
{  
    self::$App= $this;
    self::$Route_Dir = $dir;
    $this->route= new Route();
    $this->auth= new Auth();
    $this->controller= new controller();
    $this->session  = new session();
    $this->Response  = new Response();

}

public function run(){
echo $this->route->proccess();

}

}
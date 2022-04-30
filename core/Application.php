<?php
namespace app\core;
class Application{
 public static $App;
 public Route $route;
public static $Route_Dir;
public function __construct($dir)
{  
    self::$App= $this;
    self::$Route_Dir = $dir;
    $this->route= new Route();
    
}

public function run(){
echo $this->route->proccess();

}

}
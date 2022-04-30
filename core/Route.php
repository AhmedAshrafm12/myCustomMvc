<?php

namespace app\core;
class Route{
 public $routes = [];  
 public $request; 
public function __construct()
{
    $this->request = new Request();
}

public function get($path , $callback){ $this->routes['get'][$path] = $callback; }    // fill our route list
public function post($path , $callback){ $this->routes['post'][$path] = $callback; }   // fill our route list


public function proccess(){
// get the current path 
$path = $this->request->getPath();
// get the current method type
$method = $this->request->getMethod();
// get the callback
$callback = $this->routes[$method][$path];
if($callback == false)
return "not found";
if(is_string($callback)){
return $this->render($callback);
}



}


// render

public function render($callback)
{
   $layoutContent = $this->renderlayout('main');
   $ViewContent = $this->renderView($callback);
 return str_replace("{{ 'content' }}",$ViewContent,$layoutContent);

}


// render veiw 
public function renderView($view)
{
    ob_start();
    include_once  Application::$Route_Dir."/views/$view.php";
    return ob_get_clean();
}





//render layout 


public function renderlayout($layout)
{
    ob_start();
    include_once  Application::$Route_Dir."/views/layouts/$layout.php";
    return ob_get_clean();
}


    
}
<?php
namespace app\core; 
class controller{


public function render($view,$params = []){
    return Application::$App->route->render($view,$params);
}


}
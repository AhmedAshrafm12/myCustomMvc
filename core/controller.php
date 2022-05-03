<?php
namespace app\core; 
class controller{

public $layout  = 'main';
public function render($view,$params = []){
    return Application::$App->route->render($view,$params);
}



/**
 * Get the value of layout
 */ 
public function getLayout()
{
return $this->layout;
}

/**
 * Set the value of layout
 *
 * @return  self
 */ 
public function setLayout($layout)
{
$this->layout = $layout;

}
}
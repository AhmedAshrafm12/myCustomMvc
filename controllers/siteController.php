<?php
namespace app\controllers;

use app\core\controller;

class siteController extends controller {

public function __construct()
{
    
}

public function index(){

   return $this->render("home",["name"=>"Ahmed"]);

}

}
<?php
namespace app\controllers;

use app\core\controller;
use app\core\Request;

class authController extends controller {

public function __construct()
{
    
}

public function login(Request $request){
   if($request->ispost()){
$validation  = $request->validate(["password"=>[["max",2] ,"required"] , "email"=>["required"  , ["min",40] ]]);
return  $this->render('login' , ["errors"=>$validation]);


   }

}

}
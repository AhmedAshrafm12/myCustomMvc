<?php
namespace app\controllers;

use app\core\controller;
use app\core\Request;
use app\models\user;

class authController extends controller {

public function __construct()
{
    
}

public function login(Request $request){
   if($request->ispost()){
$validation  = $request->validate(["password"=>[["max",2] ,"required"] , "email"=>["required"  , ["min",40] ]]);
return  $this->render('login' , ["errors"=>$validation]);
  }}
public function register(Request $request){
   if ($request->ispost()) {
       $user = new user();
       $validation  = $request->validate(["password"=>["required"] , "email"=>["required" ] , "firstName"=>["required"]]);
       if (empty($validation)) {
           $user->save($request->getbody());
       }
   }
  return  $this->render('register');

}

}
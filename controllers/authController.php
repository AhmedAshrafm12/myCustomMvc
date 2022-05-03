<?php
namespace app\controllers;

use app\core\Application;
use app\core\Auth;
use app\core\controller;
use app\core\Request;
use app\models\user;

class authController extends controller
{
    public function __construct()
    {
        $this->setLayout('registeration');
    }

    public function login(Request $request)
    {
        if ($request->ispost()) {
           $email = $request->getbody()['email'];
           $password = $request->getbody()['password'];
         $Auth =    Application::$App->auth->auth(['email'=>$email ,  'password'=>$password ]);
        if($Auth)
       Application::$App->Response->redirect("/");
       else {
           Application::$App->session->setFlash("error","wrong creds");
           return $this->render('login');

       }
           
    }
    }
    public function register(Request $request)
    {
        if ($request->ispost()) {
            $user = new user();
            $validation  = $request->validate(["password"=>["required"] , "email"=>["required" ] , "firstName"=>["required"]]);
            if (empty($validation)) {
                $user->save($request->getbody());
                Application::$App->session->setFlash("success" , "done");
                Application::$App->Response->redirect("/");

            }
        }
        return  $this->render('register');
    }

    public function index(){
        $this->render('login');
    }
}
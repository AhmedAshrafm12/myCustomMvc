<?php
namespace app\controllers;

use app\core\controller;
use app\models\category;
use app\models\product;

class siteController extends controller {

public function __construct()
{
    
}

public function index(){
   $product  = new product();
   $products = $product->All(4);

   $category  = new category();
   $categories = $category->All();
   return $this->render("home",["products"=>$products , "categories"=>$categories]);

}

}
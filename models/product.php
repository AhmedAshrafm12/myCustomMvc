<?php
namespace app\models;

use app\core\Model;

class product extends Model{

   public $attributes = [
       'name' ,
    'avatar' ,
     'price' ,
      'categoreyId'];
public function getTableName()
{
    return 'products';
}
public function getpk()
{
    return 'id';
}

public function getAttributes()
{
    return $this->attributes;
}


public function save($data)
{
   return parent::save($data);
}


}


?>
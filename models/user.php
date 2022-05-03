<?php
namespace app\models;

use app\core\Model;

class user extends Model{

   public $attributes = [
       'firstName' ,
    'lastName' ,
     'email' ,
      'password'];
public function getTableName()
{
    return 'users';
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
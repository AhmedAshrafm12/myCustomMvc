<?php
namespace app\models;

use app\core\Model;

class category extends Model{

   public $attributes = [
       'name' ,
    'avatar' ];
public function getTableName()
{
    return 'categories';
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
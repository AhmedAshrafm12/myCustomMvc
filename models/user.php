<?php
namespace app\models;

use app\core\Model;

class user extends Model{

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
    return ['firstName' , 'lastName' , 'email' , 'password'];
}


public function save($data)
{
   return parent::save($data);
}


}


?>
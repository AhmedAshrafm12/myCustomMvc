<?php
namespace app\core;

class Auth{
public $tableName = 'users';
public function __construct()
{
    // session_start();
}

public function setTableName(){$this->tableName= 'users';}
public function getTableName(){return $this->tableName;}


public function auth($credentials){
    $tableName = $this->getTableName();
    $database = new dataBase();
  $cloumns  = array_keys($credentials);
  $values = array_values($credentials);

    $sql = "SELECT * FROM $tableName WHERE ".implode('= ? AND ',$cloumns) ." = ? LIMIT 1";
    $stmt = $database->pdo->prepare($sql);
    $stmt->execute($values);
    $this->setUser($stmt->fetch());
    return $stmt->rowCount()  > 0 ? true : false ;
}




public function setUser($userObj){
     $_SESSION['Auth']  = $userObj;

}
public function user(){
    return  isset($_SESSION['Auth'])  ?  $_SESSION['Auth'] : false ;
}

public function isAuth(){
    $checkAuth = $this->user();
    return  $checkAuth == false  ?  false : true ;
}


public function destroyAuth(){
    unset($_SESSION['Auth']);
}







}



?>
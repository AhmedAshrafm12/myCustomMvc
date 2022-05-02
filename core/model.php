<?php
namespace app\core;
abstract class Model{

abstract function getTableName();

abstract public function getPk();

abstract public function getAttributes();


public function save($data){
$database = new dataBase();
 $tableName = $this->getTableName();
 $atrributes = $this->getAttributes();
 $values = [];
 foreach($atrributes as $atr){ 
  if(empty($data[$atr]))
  $data[$atr] = null;  
array_push($values,$data[$atr]);
    
}
 $params  = array_map(fn()=>"?",$atrributes);
  $sql = "INSERT INTO $tableName (".implode(',',$atrributes).") VALUES (".implode(',',$params).")";
    $stmt =  $database->pdo->prepare($sql);
    $stmt->execute($values); 

    // echo "<pre>";
    // var_dump($this);

  


}

}
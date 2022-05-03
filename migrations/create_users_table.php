<?php

use app\core\dataBase;

class create_users_table{

  

public function up($tableName){
    $database = new dataBase();
    $statm =  $database->pdo->prepare("CREATE TABLE ".$_ENV['DB_NAME'].".$tableName ( `id` INT NOT NULL AUTO_INCREMENT , `firstName` TEXT NOT NULL , `lastName` TEXT NOT NULL , `email` VARCHAR(50) NOT NULL , `password` VARCHAR(300) NOT NULL , `status` INT NOT NULL DEFAULT '0' , PRIMARY KEY (`id`)) ENGINE = InnoDB ");
    $statm->execute();
  
  }
  
  public function down(){
      echo "down function";
  }

}
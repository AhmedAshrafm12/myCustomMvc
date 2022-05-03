<?php

use app\core\dataBase;

class create_products_table{


public function up($tableName){
    $database = new dataBase();
    $statm =  $database->pdo->prepare("CREATE TABLE ".$_ENV['DB_NAME'].".$tableName ( `id` INT NOT NULL AUTO_INCREMENT , `name` TEXT NOT NULL , `categoreyId` int NOT NULL,`price` int NOT NULL , `avatar` VARCHAR(50) NOT NULL ,  PRIMARY KEY (`id`)) ENGINE = InnoDB ");
    $statm->execute();
  
  }
  
  public function down(){
      echo "down function";
  }

}
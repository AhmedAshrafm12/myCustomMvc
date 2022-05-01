<?php
namespace app\core;

use PDO;

class dataBase{
public PDO $pdo;

public function __construct()
{

$this->pdo = new PDO($_ENV['DB_DSN'],$_ENV['DB_USER'],$_ENV['DB_PASSWORD']);
$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);}



public function applyMigrations(){
$this->createMigrationTable();
$appliedMigs = $this->getAppliedMigrations();

$files = scandir(dirname(__DIR__).'/migrations');
$pendingMigrations =  array_diff($files,$appliedMigs);

$newMigrations = [];
foreach($pendingMigrations as $migration){
    if ($migration != '.' && $migration != '..') {
        $className = pathinfo($migration, PATHINFO_FILENAME);
        require_once (dirname(__DIR__).'/migrations/'.$migration);
        $obj = new $className();
        array_push($newMigrations,$migration);
        $obj->up();
    }

}
if(empty($newMigrations))
var_dump("nothing to migrate");
else{
    foreach($newMigrations as $migration)
    $this->saveMigrations($migration);
}




}





public function createMigrationTable(){

    $this->pdo->exec("CREATE TABLE IF NOT EXISTS `coffee`.`migrations` ( `id` INT NOT NULL AUTO_INCREMENT , `migration` TEXT NOT NULL , `createdAt` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`)) ENGINE = InnoDB; ");
    
    }
    
    
    public function getAppliedMigrations(){
    $statm =  $this->pdo->prepare("SELECT `migration` FROM `migrations` ");
    $statm->execute();
    return $statm->fetchAll(PDO::FETCH_COLUMN);
    }
    
    
    public function saveMigrations($migration){
        $statm =  $this->pdo->prepare("INSERT INTO `migrations`(`migration`) VALUES (?) ");
        $statm->execute(array($migration));
    
    }

}
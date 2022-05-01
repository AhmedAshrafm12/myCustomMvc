<?php



require_once "vendor/autoload.php";

use app\controllers\siteController;
use app\core\dataBase;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
$dataBase  = new dataBase();
$dataBase->applyMigrations();
;

?>
<?php
namespace app\core;

class session{
protected const FLASH_KEY  = 'flash';
public  function __construct()
{
    session_start();

    //  mark 
    $flashs = $_SESSION[self::FLASH_KEY] ?? [];
    if (!empty($flashs)) {
        foreach ($flashs  as &$flash) {
            $flash['removed'] = true;
        }
        $_SESSION[self::FLASH_KEY] = $flashs;
        // var_dump($_SESSION[self::FLASH_KEY]);
    }
}

public function setFlash($key , $massege){
 
$_SESSION[self::FLASH_KEY][$key] = [
'value'=>$massege,
'removed'=>false
    
] ;  

}
public function getFlash($key){
 
return $_SESSION[self::FLASH_KEY][$key]['value'] ?? '';

}


public  function __destruct()
{
    $flashs = $_SESSION[self::FLASH_KEY] ?? [];
    foreach ($flashs  as $key=> &$flash) {
       if($flash['removed'] == true)
        unset($flashs[$key]);
    }
        $_SESSION[self::FLASH_KEY] = $flashs;
}
public function set($key , $value){
    @session_start();
    $_SESSION[$key] = $value;
}
public function get($key){

 return $_SESSION[$key];
}

}
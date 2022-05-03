<?php

namespace app\core;
class asset{
const JS_FOLDER = 'js';
const CSS_FOLDER = 'css';
const IMGS_FOLDER = 'imgs';



public static function asset($folder)
{
    return "http://localhost/mycustommvc/public/asset/".$folder;
}




}
<?php 
namespace app\core;
class Request{


const RULE_REQUIRED= 'required';
const RULE_MAX= 'max';
const RULE_MIN= 'min';
const RULE_EMAIL= 'email';
const RULE_MATCH= 'match';

public $validationErrors = [];

public function getPath(){
$path = $_SERVER['REQUEST_URI'] ?? '/';
$position =  strpos($path,'?');

if($position === false)
return $path;

$path = substr($path ,0, $position  ); 
return $path;
}


public function getMethod(){
  return strtolower($_SERVER['REQUEST_METHOD']);
}

public function ispost(){
 if($_SERVER['REQUEST_METHOD'] == 'POST')
 return true; 
}

public function isget(){
 if($_SERVER['REQUEST_METHOD'] == 'GET')
 return true; 
}

public function getbody(){
  $body = [];
  if($_SERVER['REQUEST_METHOD'] == 'POST')
 {
    foreach($_POST as $key=>$value){
      $body[$key]=$value;
    }  
}
else
{
  foreach($_GET as $key=>$value){
    $body[$key]=$value;
  }  
}
return $body;}




public function validate($rules){  
foreach ($rules as $input=>$rules) {
    foreach ($rules as $rule) {
        if (is_array($rule)) {
            $ruleName = $rule[0];
        } else {
            $ruleName = $rule;
        }
        switch ($ruleName) {
case self::RULE_REQUIRED:
if (empty($this->getbody()[$input])) {
    array_push($this->validationErrors, "$input field is required");
}
break;

case self::RULE_MIN:
if (strlen($this->getbody()[$input]) < $rule[1]) {
    array_push($this->validationErrors, "$input must be longer than $rule[1]");
}
break;

case self::RULE_MAX:
if (strlen($this->getbody()[$input]) > $rule[1]) {
    array_push($this->validationErrors, "$input must be shorter than $rule[1])");
}
break;
}
    }
}
if(!empty($this->validationErrors))
return $this->validationErrors;

}


}





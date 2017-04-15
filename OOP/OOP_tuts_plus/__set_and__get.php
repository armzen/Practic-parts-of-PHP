<?php

class MyClass
{
    private $myArray = array();    
    public function __set($prop, $value) {    
        $this->myArray[$prop] = $value;        
    }
    
    public function __get($prop) {    
        return $this->myArray[$prop];        
    }    
}

$obj = new MyClass;

if(!isset($obj->name)) {
    $obj->name = "John Doe";
}

echo $obj->name . "<br>";

?>
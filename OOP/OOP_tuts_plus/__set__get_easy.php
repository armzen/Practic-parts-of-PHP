<?php

class MyClass
{
    private $prop;
    public function __set($prop, $value) {    
        $this->prop = $value;        
    }
    
    public function __get($prop) {    
        return $this->prop;        
    }    
}

$obj = new MyClass;

if(!isset($obj->name)) {
    $obj->name = "John Doe";
}

echo $obj->name . "<br>";

?>
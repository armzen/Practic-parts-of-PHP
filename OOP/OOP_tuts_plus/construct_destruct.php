<?php

class MyClass
{
    public $prop1 = "I'm a class prop";
    
    public function __construct() {    
        echo " The class " , __CLASS__ , " was initiated <br> ";
    }
    
    public function __destruct() {
    
        echo " The class " , __CLASS__ , " was destroyed <br> ";
    }
    
    public function setProp($newval) {
        $this->prop1 = $newval;
    }
    
    public function getProp() {    
        return $this->prop1 . '<br/>';
    }    
}

$obj = new MyClass;
echo $obj->prop1 . '<br>';

$obj->setProp("I'm a new prop value");
echo $obj->getProp();
?>
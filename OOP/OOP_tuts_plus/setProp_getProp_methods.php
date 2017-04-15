<?php

class MyClass
{
    public $prop1 = "I'm a class property";
    
    public function setProp($newval) {
        
        $this->prop1 = $newval ;
    }
    public function getProp() {
        return $this->prop1. "<br/>";
    }
}


$obj = new MyClass;

echo $obj->getProp();
$obj->setProp("I'm a new property value");
echo $obj->getProp();

?>
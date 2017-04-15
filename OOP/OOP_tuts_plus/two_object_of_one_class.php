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
$obj2 = new MyClass;

echo $obj->getProp();
echo $obj2->getProp();

$obj->setProp(" I'm a new prop value");
$obj2->setProp("I belong second object");

echo $obj->getProp();
echo $obj2->getProp();

?>
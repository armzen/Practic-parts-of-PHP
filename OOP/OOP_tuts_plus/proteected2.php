<?php

class MyClass 
{
    public $prop = " I'm a class prop";
    protected function getProp() {
        return $this->prop;
    }
    
    public function callGetProp() {
        return $this->getProp();
    }
}

$obj = new MyClass;
echo $obj->prop . '<br>';
echo $obj->callGetProp();

?>
<?php

class MyClass
{
    public $prop1 = " I'm a property ";
}

$obj = new MyClass;


echo '<pre>';
var_dump($obj);
echo '</pre>';



echo $obj->prop1;
?>
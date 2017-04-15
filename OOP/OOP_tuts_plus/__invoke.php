<?php

class MyClass
{
    public function __invoke($prop) {    
        var_dump($prop);        
    }
 }

$obj = new MyClass;
$obj(15);
?>
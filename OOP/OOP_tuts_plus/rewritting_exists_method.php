<?php

class MyClass 
{
    
    public $prop = " I'm a class prop";
    public function __construct() {
        echo "The class: " , __CLASS__ ,  " was initiated <br>";
    }
    
    public function __destruct() {
        echo " The class: " , __CLASS__ , " was destroyed <br>";
    } 
    public function getProp() {
        return $this->prop . '<br>';
    }
    public function setProp($newval) {
        $this->prop = $newval;
    }   
}

class MyNewClass extends Myclass 
{
    public function __construct() {
        parent::__construct();
        echo "The class: " , __CLASS__ ,  " was initiated <br>";
    }
    public function newMethod() {
        echo "From new method in other class: " . __CLASS__ . "<br>" ;
    }
}

$newobj = new MyNewClass;
echo $newobj->prop . '<br>';
echo $newobj->getProp();

$newobj->setProp( "new value for prop ");
echo $newobj->prop . '<br>';
$newobj->newMethod();

?>
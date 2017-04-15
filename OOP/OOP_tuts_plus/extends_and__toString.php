<?php

class MyClass
{

    public $prop1 = "I'm a class property";
    public function __construct() {
        echo "The class " , __CLASS__ , " was initiated <br>";
    }
    
    public function __destruct() {
        echo " The class " , __CLASS__ , " was destroyed <br>" ;
    }
    
    public function __toString() {
        echo " We use toString magic method: ";
        return $this->getProp();
    }
    
    public function getProp() {
        return $this->prop1 . '<br>';
    }
    
    public function __set($prop, $val) {
        $this->prop = $val;
    }
    
    public function __get($prop) {
        return $this->prop;
    }
}

$obj = new MyClass;
if(isset($obj->name)) {
    return $obj->name;
}
else{
    $obj->name = "Karen";
}
echo $obj->getProp();
echo $obj->prop1 . '<br>';
echo $obj->name . '<br>';

class MyOtherClass extends MyClass
{
    public function MyOtherMethod() {
        echo "From Other method in : " , __CLASS__ , "<br>"; 
    }
}

$newobj = new MyOtherClass;
echo $newobj->MyOtherMethod();
echo $newobj->getProp();
echo ($newobj->newname = 'Suren') .'<br>';

?>
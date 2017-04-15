<?php

class MyClass
{
	public $prop = "I'm a class property";
	protected function getProp() {
		return $this->prop . '<br>';
	}
}
class NewClass extends MyClass
{
    public function callProtected() {
        echo " Calling from the public-method in child class: ";
        return $this->getProp();
    }
}
$obj = new MyClass;
echo $obj->prop . '<br>';
//$obj->getProp();


$obj2 = new NewClass;
echo $obj2->callProtected();

?>
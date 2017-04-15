<?php

class MyClass 
{
    public static $count = 0;
    public static function plusOne() {
        echo "The count is:" . (self::$count++) . "<br>";
    }  
}


while(MyClass::$count < 10) {
    MyClass::plusOne();
}

?>
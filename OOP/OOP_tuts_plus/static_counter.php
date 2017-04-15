<?php

class MyClass 
{
    public static $count = 0;
    public static function plusOne() {
        echo " The count is: " . ++self::$count . "<br>";
    }  
}


do{
    echo MyClass::plusOne();
}while(MyClass::$count < 10);

?>
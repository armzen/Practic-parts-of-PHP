<?php

require_once "Barevner.class.php";

$obj = new Barevner();

$obj->barev1();
echo $obj->name . '<hr>';

$obj->voxj1().$obj->voxj2();
echo $obj->name." jan <br>";

$obj->voxj1();
$obj->voxj1_parent();



/*
$o->voxj_by_name('Serob');
$o->voxj3();

/*
//Voxjuyn::voxj2();
 //@Voxjuyn::voxj1();

// obj1 
$obj = new Voxjuyn();
//$obj->voxj1();
//$obj->voxj2();
$obj->name = "Stepa";
$obj->pass ="Dyadya";

echo 'obj1 name : '. $obj->name . '<br>';
echo 'obj1 pass : '. $obj->pass . '<br>';

// obj2 
$obj2 = new Voxjuyn();
$obj2->name = "Krokodil";
$obj2->pass = "Gena";

echo 'obj2 name: ' . $obj2->name . '<br>';
echo 'obj2 pass: ' . $obj2->pass . '<br>';

$obj3 = new Voxjuyn();
echo 'obj3 name: '.$obj3->name;
*/
?>
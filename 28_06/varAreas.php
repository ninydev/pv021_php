<?php

$varOut = 10;

//f1();
//MyFirstFunction();

function f1 (){
    GLOBAL $varOut;
    echo "varOut in Fun = " . $varOut;
    echo " PHP_SELF = " . $_SERVER['PHP_SELF'];
}

function f2 ($var){
    var_dump($var);
    return $var;
}

$v1 = f2("string");
var_dump($v1);
$v2 = f2(10);
var_dump($v2);



require_once ('lib/MyFirstFunction.php');



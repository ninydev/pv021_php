<?php

class CountClass
{
    static private $count = 0;
    public $name = "Vasya";
    public function __construct(){
        // Обращение к себе - к своим
        // статическим методам
        self::$count++;
        CountClass::$count++;

        // обращение к полям и методам класса
        $this->name = "Petya";

        echo "Count: " . self::$count;

        $this->f1();
        self::f2();
        CountClass::f2();
    }

    public function f1(){}
    public static function f2() {}
}

$c = new CountClass();
<?php

class Person
{
    public $name;
    public $age;
    public $money = 4000;

    public function formatMoney(){
        return number_format($this->money, 2);
    }
}

$person1 = new Person();
echo $person1-> name ="Rouhi". "<br>";
echo $person1->formatMoney(). "<br>";
$person2 = new Person();
echo $person2-> name = "Karim". "<br>";
$person2-> money = 5000 . "<br>";
echo $person2->formatMoney();

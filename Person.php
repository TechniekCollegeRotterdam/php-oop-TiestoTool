<?php

class Person
{
    public $name;
    public $age;
    public $money = 4000;
    public  function setName($name){
        $this->name = ucfirst($name);
    }
    public function formatMoney(){
        return number_format($this->money, 2);
    }
}

$person1 = new Person();
$person1->setName("rouhi");
echo $person1->name . "<br>";
echo $person1->formatMoney(). "<br>";

$person2 = new Person();
echo $person2-> name = "karim". "<br>";
$person2-> money = 5000 ;

echo $person2->formatMoney();

<?php

class Person
{
    public $name;
    public $age;
    public $money = 4000;
    public  function __construct($name)
    {
        $this->name = ucfirst($name);
    }
    public function formatMoney(){
        return number_format($this->money, 2);
    }
}

$person1 = new Person("rouhi");
echo $person1->name . "<br>";
echo $person1->formatMoney(). "<br>";

$person2 = new Person("karim");
echo $person2-> name . "<br>";
$person2-> money = 5000 ;

echo $person2->formatMoney();

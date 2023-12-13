<?php
class Cars
{
  public $brand;
  public $price;
  public $doors;

  public function formatPrice(){
      $BTWprice = $this->price * 1.19;
       return number_format($BTWprice,2);
  }
}
$car1 = new Cars();
$car1->brand = "Hummer";
$car1->price = 100;
$car1->doors = 5;

echo $car1->brand . "<br>";
echo $car1->formatPrice() . "<br>";
echo $car1->doors . "<br>";

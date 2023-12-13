<?php

 class Product
 {
     //properties
     public $name;
     public $price;
     public $currency;
     public $category;
     public $rating;

     public function __construct($price, $name = "whiskey", $currency = "&euro", $category = "dranken", $rating = 3)
     {
         $this->name = ucfirst($name);
         $this->price = $price;
         $this->currency = $currency;
         $this->category = $category;
         $this->rating = $rating;

     }
     public function formatPrice()
     {
         return number_format($this->price, 2);
     }

     public function getProduct()
     {
        return"Het product is ".$this->name. "kost ". $this->currency. " ". $this->price;
     }
 }

 $drank1 = new Product(30);
 echo $drank1->getProduct();
// echo $drank1->category . " " . $drank1 ->rating;
//$drank2 = new Product(30);
//echo $drank2->category . " " . $drank2 ->rating;
//$drank3 = new Product(30);
//echo $drank3->category . " " . $drank3 ->rating;




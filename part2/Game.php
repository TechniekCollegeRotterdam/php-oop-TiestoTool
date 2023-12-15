<?php

class Game
{
    private string $name;
    private string $description;
    private float $price;
    private array $tags;
    private float $purchaseprice;

    public function __construct(string $name, string $description, float $price, array $tags)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->tags = $tags;
    }

    private function purchaseprice()
    {
        $btw = 0.21;
        $winstPercentage = 0.10;
        $purchaseprice = $this->price / (1 + $btw);
        $purchaseprice -= $purchaseprice * $winstPercentage;
        $this->purchaseprice = $purchaseprice;
    }

public function getName()
{
        return $this->name;
    }
}

<?php

class Game
{
    public string $name;
    public string $description;
    public float $price;
    public array $tags;

    /**
     * @param string $name
     * @param string $description
     * @param float $price
     * @param array $tags
     */

    public function __construct(string $name, string $description, float $price, array $tags)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->tags = $tags;
    }
    public function getName()
    {
        return $this->name;
    }
}
<?php

class Game
{
    public $name;
    public $description;
    public $price;
    public $tags;

    /**
     * @param string $name
     * @param string $description
     * @param string $price
     * @param array $tags
     */

    public function __construct($name, $description, $price, $tags)
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
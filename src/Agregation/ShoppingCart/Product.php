<?php

namespace App\Agregation\ShoppingCart;

abstract class Product
{
    protected $name;
    protected $price;

    public function __construct(string $name, float $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): string
    {
        return number_format($this->price, 2, ',', '.');
    }
}

<?php

namespace App\Agregation\ShoppingCart;

class Cart
{
    private $cart = [];

    public function add(Product $product)
    {
        $this->cart[] = $product;
    }

    public function getCart(): array
    {
        return $this->cart;
    }
}

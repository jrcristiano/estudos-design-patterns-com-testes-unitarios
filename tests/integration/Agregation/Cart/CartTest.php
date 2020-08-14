<?php

namespace Test\Unit\Agregation\Cart;

use App\Agregation\ShoppingCart\Backpack;
use App\Agregation\ShoppingCart\Book;
use App\Agregation\ShoppingCart\Cart;
use PHPUnit\Framework\TestCase;

class CartTest extends TestCase
{
    public function testCartCollection()
    {
        $book = new Book('Naruto vol. 1', 9.99);
        $backpack = new Backpack('Mala para viajar', 299.99);
        
        $cart = new Cart;
        $cart->add($book);
        $cart->add($backpack);
        
        $this->assertEquals(2, count($cart->getCart()));
    }
}

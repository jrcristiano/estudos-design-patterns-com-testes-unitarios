<?php

namespace Test\Unit\Agregation\ShoppingCart;

use App\Agregation\ShoppingCart\Backpack;
use PHPUnit\Framework\TestCase;

class BookTest extends TestCase
{
    public function testBookNameAndPrice()
    {
        $backpack = new Backpack('Naruto vol. 1', 9.99);
        $actual = "{$backpack->getName()} - {$backpack->getPrice()}";

        $this->assertEquals('Naruto vol. 1 - 9,99', $actual);
    }
}

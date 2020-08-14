<?php

namespace Test\Unit\Agregation\ShoppingCart;

use App\Agregation\ShoppingCart\Backpack;
use PHPUnit\Framework\TestCase;

class BackpackTest extends TestCase
{
    public function testBackpackName()
    {
        $backpack = new Backpack('Mala para viagem', 299.99);
        $actual = "{$backpack->getName()} - {$backpack->getPrice()}";

        $this->assertEquals('Mala para viagem - 299,99', $actual);
    }
}

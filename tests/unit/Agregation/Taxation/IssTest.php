<?php

namespace Test\Unit\Agregation\Taxation;

use App\Agregation\Taxation\Iss;
use PHPUnit\Framework\TestCase;

class IssTest extends TestCase
{
    public function testIssGetTax()
    {
        $iss = new Iss;
        $this->assertEquals(0.15, $iss->getTax());
    }
}

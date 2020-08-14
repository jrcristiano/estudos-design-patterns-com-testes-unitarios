<?php

namespace Test\Unit\Agregation\Taxation;

use App\Agregation\Taxation\Icms;
use PHPUnit\Framework\TestCase;

class IcmsTest extends TestCase
{
    public function testIcmsGetTax()
    {
        $icms = new Icms;
        $this->assertEquals(0.1, $icms->getTax());
    }
}

<?php

namespace Test\Unit\Agregation\Taxation;

use App\Agregation\Taxation\Icms;
use App\Agregation\Taxation\Iss;
use App\Agregation\Taxation\TaxCalculator;
use PHPUnit\Framework\TestCase;

class TaxCalculatorTest extends TestCase
{
    public function testTaxCalculatorIcms()
    {
        $icms = new Icms;
        $taxCalculator = new TaxCalculator;

        $this->assertEquals(100, $taxCalculator->getCalculatedValue(1000, $icms));
    }

    public function testTaxCalculatorIss()
    {
        $iss = new Iss;
        $taxCalculator = new TaxCalculator;

        $this->assertEquals(150, $taxCalculator->getCalculatedValue(1000, $iss));
    }
}

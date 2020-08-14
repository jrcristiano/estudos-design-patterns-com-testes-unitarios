<?php

namespace App\Agregation\Taxation;

class TaxCalculator
{
    public function getCalculatedValue(float $value, Taxation $taxation)
    {
        return $taxation->getTax() * $value;
    }
}

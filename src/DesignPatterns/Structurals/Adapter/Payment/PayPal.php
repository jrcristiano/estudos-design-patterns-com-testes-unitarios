<?php

namespace App\DesignPatterns\Structurals\Adapter\Payment;

class PayPal implements Card
{
    private $value;

    public function setValue(float $value): Card
    {
        $this->value = $value;
        return $this;
    }
    
    public function getValue(): float
    {
        return $this->value;
    }
}

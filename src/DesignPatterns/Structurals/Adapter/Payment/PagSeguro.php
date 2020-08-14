<?php

namespace App\DesignPatterns\Structurals\Adapter\Payment;

class PagSeguro implements Card
{
    protected $value;

    public function setValue(float $value): Card
    {
        $this->value = $value - ($value * 0.05);
        return $this;
    }

    public function getValue(): float
    {
        return $this->value;
    }
}

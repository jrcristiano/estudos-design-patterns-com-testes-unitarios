<?php

namespace App\DesignPatterns\Structurals\Adapter\Payment;

interface Card
{
    public function setValue(float $value): Card;
    public function getValue(): float;
}

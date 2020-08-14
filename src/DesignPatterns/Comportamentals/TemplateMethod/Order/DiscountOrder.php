<?php

namespace App\DesignPatterns\Comportamentals\TemplateMethod\Order;

class DiscountOrder extends AbstractOrder
{
    protected function changeValue(int $value) :int
    {
        return -$value;
    }
}

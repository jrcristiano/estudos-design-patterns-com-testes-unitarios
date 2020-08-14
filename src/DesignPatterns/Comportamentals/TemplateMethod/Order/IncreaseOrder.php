<?php

namespace App\DesignPatterns\Comportamentals\TemplateMethod\Order;

class IncreaseOrder extends AbstractOrder
{
    protected function changeValue(int $value) :int
    {
        return $value;
    }
}

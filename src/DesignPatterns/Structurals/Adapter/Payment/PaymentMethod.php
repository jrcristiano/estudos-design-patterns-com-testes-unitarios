<?php

namespace App\DesignPatterns\Structurals\Adapter\Payment;

interface PaymentMethod
{
    public function getCard(): Card;
}

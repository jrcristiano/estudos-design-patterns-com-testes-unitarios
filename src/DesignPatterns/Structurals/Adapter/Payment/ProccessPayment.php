<?php

namespace App\DesignPatterns\Structurals\Adapter\Payment;

class ProccessPayment
{
    private $paymentMethod;

    public function __construct(PaymentMethod $paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;    
    }

    public function finalizePayment(float $value)
    {
        $card = $this->paymentMethod->getCard();
        
        return $card->setValue($value)
            ->getValue();
    }
}

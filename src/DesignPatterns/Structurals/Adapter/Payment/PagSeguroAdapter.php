<?php

namespace App\DesignPatterns\Structurals\Adapter\Payment;

class PagSeguroAdapter implements PaymentMethod
{
    private $card;

    public function __construct(Card $card)
    {
        $this->card = $card;
    }

    public function getCard(): Card
    {
        return $this->card;
    }
}

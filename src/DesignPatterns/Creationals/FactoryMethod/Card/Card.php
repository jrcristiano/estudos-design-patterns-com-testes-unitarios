<?php

namespace App\DesignPatterns\Creationals\FactoryMethod\Card;

abstract class Card
{
    protected $name;
    protected $cardNumber;
    protected $cvv;

    public function setName(string $name): Card
    {
        $this->name = $name;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setCardNumber(string $cardNumber): Card
    {
        $this->cardNumber = $cardNumber;
        return $this;
    }

    public function getCardNumber(): string
    {
        return $this->cardNumber;
    }

    public function setCvv(string $cvv): Card
    {
        $this->cvv = $cvv;
        return $this;
    }

    public function getCvv(): string
    {
        return $this->cvv;
    }
}

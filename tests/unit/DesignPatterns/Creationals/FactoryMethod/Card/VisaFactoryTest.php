<?php

namespace Test\Unit\DesignPatterns\Creationals\FactoryMethod\Card;

use App\DesignPatterns\Creationals\FactoryMethod\Card\Visa;
use App\DesignPatterns\Creationals\FactoryMethod\Card\VisaFactory;
use PHPUnit\Framework\TestCase;

class VisaFactoryTest extends TestCase
{
    public function testGetInstanceCard()
    {
        $visa = new VisaFactory;
        $this->assertEquals(new Visa, $visa->makeCard());
    }

    public function testGetNameOfVisa()
    {
        $visa = new VisaFactory;
        $cardName = $visa->makeCard()
            ->setName('Cristiano JR')
            ->getName();

        $this->assertEquals('Cristiano JR', $cardName);
    }

    public function testGetCardNumberOfVisa()
    {
        $visa = new VisaFactory;
        $cardNumber = $visa->makeCard()
            ->setCardNumber('123456789')
            ->getCardNumber();

        $this->assertEquals('123456789', $cardNumber);
    }

    public function testGetCvvOfVisa()
    {
        $visa = new VisaFactory;
        $cvv = $visa->makeCard()
            ->setCvv('123')
            ->getCvv();

        $this->assertEquals('123', $cvv);
    }
}

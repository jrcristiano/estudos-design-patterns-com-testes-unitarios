<?php

namespace Test\Unit\DesignPatterns\Creationals\FactoryMethod\Card;

use App\DesignPatterns\Creationals\FactoryMethod\Card\MasterCard;
use App\DesignPatterns\Creationals\FactoryMethod\Card\MasterCardFactory;
use PHPUnit\Framework\TestCase;

class MasterCardFactoryTest extends TestCase
{
    public function testGetInstanceCard()
    {
        $masterCard = new MasterCardFactory;
        $this->assertEquals(new MasterCard, $masterCard->makeCard());
    }

    public function testGetNameOfMasterCard()
    {
        $masterCard = new MasterCardFactory;
        $cardName = $masterCard->makeCard()
            ->setName('Cristiano JR')
            ->getName();

        $this->assertEquals('Cristiano JR', $cardName);
    }

    public function testGetCardNumberOfMasterCard()
    {
        $masterCard = new MasterCardFactory;
        $cardNumber = $masterCard->makeCard()
            ->setCardNumber('123456789')
            ->getCardNumber();

        $this->assertEquals('123456789', $cardNumber);
    }

    public function testGetCvvOfMasterCard()
    {
        $masterCard = new MasterCardFactory;
        $cvv = $masterCard->makeCard()
            ->setCvv('123')
            ->getCvv();

        $this->assertEquals('123', $cvv);
    }
}

<?php

namespace App\DesignPatterns\Creationals\FactoryMethod\Card;

class MasterCardFactory extends AbstractFactoryCard
{
    public function makeCard(): Card
    {
        return new MasterCard;
    }   
}

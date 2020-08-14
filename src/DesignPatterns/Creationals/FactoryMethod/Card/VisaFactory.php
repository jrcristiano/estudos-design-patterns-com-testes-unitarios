<?php

namespace App\DesignPatterns\Creationals\FactoryMethod\Card;

class VisaFactory extends AbstractFactoryCard
{
    public function makeCard(): Card
    {
        return new Visa;
    }   
}

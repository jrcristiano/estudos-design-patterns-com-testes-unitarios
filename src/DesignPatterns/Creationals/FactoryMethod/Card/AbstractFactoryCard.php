<?php

namespace App\DesignPatterns\Creationals\FactoryMethod\Card;

abstract class AbstractFactoryCard
{
    abstract public function makeCard(): Card;
}

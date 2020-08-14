<?php

namespace App\Agregation\Taxation;

class Iss implements Taxation
{
    public function getTax(): float
    {
        return 0.15;
    }
}

<?php

namespace App\Agregation\Taxation;

class Icms implements Taxation
{
    public function getTax(): float
    {
        return 0.1;
    }
}

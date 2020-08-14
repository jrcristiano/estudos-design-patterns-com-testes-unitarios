<?php

namespace App\DesignPatterns\Structurals\Bridge\Web;

class DarkTheme implements Theme
{
    public function getColor(): string
    {
        return 'black';
    }
}

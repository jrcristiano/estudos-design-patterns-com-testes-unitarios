<?php

namespace App\DesignPatterns\Structurals\Bridge\Web;

class LightTheme implements Theme
{
    public function getColor(): string
    {
        return 'gray and white';
    }
}

<?php

namespace App\DesignPatterns\Structurals\Bridge\Web;

class Home extends WebPage
{
    public function render(): string
    {
        return "Home page is {$this->theme->getColor()}";
    }
}

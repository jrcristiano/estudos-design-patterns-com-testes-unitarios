<?php

namespace App\DesignPatterns\Structurals\Bridge\Web;

class Profile extends WebPage
{
    public function render(): string
    {
        return "Profile page is {$this->theme->getColor()}";
    }
}

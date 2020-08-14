<?php

namespace App\DesignPatterns\Structurals\Bridge\Web;

abstract class WebPage
{   
    protected $theme;

    public function __construct(Theme $theme)
    {
        $this->theme = $theme;    
    }

    abstract public function render(): string;
}

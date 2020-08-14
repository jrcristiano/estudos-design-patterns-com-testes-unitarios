<?php

namespace Test\DesignPatterns\Bridge\Web;

use App\DesignPatterns\Structurals\Bridge\Web\LightTheme;
use App\DesignPatterns\Structurals\Bridge\Web\Home;
use PHPUnit\Framework\TestCase;

class LightThemeTest extends TestCase
{
    public function testProfilePageDarkTheme()
    {
        $page = new Home(new LightTheme);
        $this->assertEquals('Home page is gray and white', $page->render());
    }
}

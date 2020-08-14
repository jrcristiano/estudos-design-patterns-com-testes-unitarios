<?php

namespace Test\DesignPatterns\Bridge\Web;

use App\DesignPatterns\Structurals\Bridge\Web\DarkTheme;
use App\DesignPatterns\Structurals\Bridge\Web\Profile;
use PHPUnit\Framework\TestCase;

class DarkThemeTest extends TestCase
{
    public function testProfilePageDarkTheme()
    {
        $page = new Profile(new DarkTheme);
        $this->assertEquals('Profile page is black', $page->render());
    }
}

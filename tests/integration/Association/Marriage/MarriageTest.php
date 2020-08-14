<?php

namespace App\Association\Marriage;

use PHPUnit\Framework\TestCase;

class MarriageTest extends TestCase
{
    public function testAcceptMarriage()
    {
        $marriage = new Marriage(new Husband('Charlie'), new Wife('Marie'));
        $this->assertEquals('Marie, agreed to marry Charlie', 
            $marriage->accept()
        );
    }

    public function testDeclineMarriage()
    {
        $marriage = new Marriage(new Husband('Charlie'), new Wife('Marie'));
        $this->assertEquals('Marie, declined to marry Charlie', 
            $marriage->decline()
        );
    }
}

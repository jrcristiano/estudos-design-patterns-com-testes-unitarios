<?php

namespace Test\Unit\Association\Marriage;

use App\Association\Marriage\Wife;
use PHPUnit\Framework\TestCase;

class WifeTest extends TestCase
{
    public function testGetHusbandName()
    {
        $wife = new Wife('Marie');
        $this->assertEquals('Marie', $wife->getName());
    }
}

<?php

namespace Test\Unit\Association\Marriage;

use App\Association\Marriage\Husband;
use PHPUnit\Framework\TestCase;

class HusbandTest extends TestCase
{
    public function testGetHusbandName()
    {
        $husband = new Husband('Charlie');
        $this->assertEquals('Charlie', $husband->getName());
    }
}

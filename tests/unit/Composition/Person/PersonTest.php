<?php

namespace Test\Unit\Composition\Person;

use App\Composition\Person\LegalPerson;
use App\Composition\Person\PhysicalPerson;
use PHPUnit\Framework\TestCase;

class WifeTest extends TestCase
{
    public function testPhysicalPerson()
    {
        $person = new PhysicalPerson;
        $this->assertEquals('Nome: Cristiano - CPF: 00000000000', 
            $person->getPersonData('Cristiano', '00000000000')
        );
    }

    public function testLegalPerson()
    {
        $person = new LegalPerson;
        $this->assertEquals('Nome: Cristiano - CNPJ: 00000000000000', 
            $person->getPersonData('Cristiano', '00000000000000')
        );
    }
}

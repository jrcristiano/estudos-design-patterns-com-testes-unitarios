<?php

namespace App\Composition\Person;

class PhysicalPerson
{
    /*
     * Eu poderia estar usando herança
     * já que LegalPerson (É UM) objeto
     * do tipo Person, mas optei por composição
     * para fins didáticos
     * 
     */

    public function getPersonData(string $name, string $document)
    {
        $person = new Person;
        $name = $person->setName($name)
            ->getName();
        
        $document = $person->setDocument($document)
            ->getDocument();

        return "Nome: {$name} - CPF: {$document}";
    }
}

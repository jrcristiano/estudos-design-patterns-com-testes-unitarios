<?php

namespace App\Composition\Person;

class Person
{
    protected $name;
    protected $document;

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setDocument($document)
    {
        $this->document = $document;
        return $this;
    }

    public function getDocument()
    {
        return $this->document;
    }
}

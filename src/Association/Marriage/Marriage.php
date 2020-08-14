<?php

namespace App\Association\Marriage;

class Marriage implements MarriageContract
{
    private $husband;
    private $wife;

    public function __construct(Husband $husband, Wife $wife)
    {
        $this->husband = $husband;
        $this->wife = $wife;
    }

    public function accept():string
    {
        $wife = $this->wife->getName();
        $husband = $this->husband->getName();

        return "{$wife}, agreed to marry {$husband}";
    }

    public function decline():string
    {
        $wife = $this->wife->getName();
        $husband = $this->husband->getName();

        return "{$wife}, declined to marry {$husband}";
    }
}

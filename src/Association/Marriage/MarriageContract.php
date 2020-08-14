<?php

namespace App\Association\Marriage;

interface MarriageContract
{
    public function accept():string;

    public function decline():string;
}

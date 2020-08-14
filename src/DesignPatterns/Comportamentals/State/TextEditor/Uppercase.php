<?php

namespace App\DesignPatterns\Comportamentals\State\TextEditor;

class Uppercase implements WriteState
{
    public function write(string $string): string
    {
        return strtoupper($string);
    }
}

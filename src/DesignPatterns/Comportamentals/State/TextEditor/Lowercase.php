<?php

namespace App\DesignPatterns\Comportamentals\State\TextEditor;

class Lowercase implements WriteState
{
    public function write(string $string): string
    {
        return strtolower($string);
    }
}

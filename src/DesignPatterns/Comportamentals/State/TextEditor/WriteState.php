<?php

namespace App\DesignPatterns\Comportamentals\State\TextEditor;

interface WriteState
{
    public function write(string $string): string;
}

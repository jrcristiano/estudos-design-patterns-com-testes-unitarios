<?php

namespace App\DesignPatterns\Comportamentals\State\TextEditor;

class TextEditor
{
    protected $state;

    public function __construct(WriteState $state)
    {
        $this->state = $state;
    }

    public function write(string $string): string
    {
        return $this->state->write($string);
    }
}

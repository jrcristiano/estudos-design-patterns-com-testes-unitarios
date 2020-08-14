<?php

namespace Test\Unit\DesignPatterns\Comportamentals\State\TextEditor;

use App\DesignPatterns\Comportamentals\State\TextEditor\Lowercase;
use App\DesignPatterns\Comportamentals\State\TextEditor\TextEditor;
use App\DesignPatterns\Comportamentals\State\TextEditor\Uppercase;
use PHPUnit\Framework\TestCase;

class TextEditorTest extends TestCase
{
    public function testTextEditorUpperCase()
    {
        $textEditor = new TextEditor(new Uppercase);
        $this->assertEquals('HELLO, WORLD', $textEditor->write('hello, world'));
    }

    public function testTextEditorLowerCase()
    {
        $textEditor = new TextEditor(new Lowercase);
        $this->assertEquals('hello, world', $textEditor->write('hello, world'));
    }
}

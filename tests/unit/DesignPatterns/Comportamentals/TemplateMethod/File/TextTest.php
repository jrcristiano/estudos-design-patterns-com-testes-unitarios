<?php

namespace Test\Unit\DesignPatterns\Comportamentals\TemplateMethod\File;

use App\DesignPatterns\Comportamentals\TemplateMethod\File\Text;
use PHPUnit\Framework\TestCase;

class TextTest extends TestCase
{
    public function testTextFileGenerator()
    {
        $file = new Text;

        $log = $file->setLog('File text created')->getLog();

        $this->assertEquals('File text created', $log);
    }
}

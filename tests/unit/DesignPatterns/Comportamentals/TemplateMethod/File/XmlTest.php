<?php

namespace Test\Unit\DesignPatterns\Comportamentals\TemplateMethod\File;

use App\DesignPatterns\Comportamentals\TemplateMethod\File\Xml;
use PHPUnit\Framework\TestCase;

class XmlTest extends TestCase
{
    public function testTextFileGenerator()
    {
        $file = new Xml([
            'name' => 'file name.txt',
            'content' => 'Key of this array says: hello world'
        ]);

        $log = $file->setLog('File XML created')->getLog();

        $this->assertEquals('File XML created', $log);
    }
}

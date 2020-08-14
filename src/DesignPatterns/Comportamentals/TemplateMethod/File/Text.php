<?php

namespace App\DesignPatterns\Comportamentals\TemplateMethod\File;

use App\DesignPatterns\Comportamentals\TemplateMethod\File\AbstractFileGenerator as FileGenerator;

class Text extends FileGenerator
{
    protected $log;

    public function setLog(string $log)
    {
        $this->log = $log;
        return $this;
    }

    public function getLog(): string
    {
        return $this->log;
    }
}

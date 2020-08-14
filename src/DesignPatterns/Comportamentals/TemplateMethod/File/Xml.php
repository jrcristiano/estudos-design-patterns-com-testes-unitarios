<?php

namespace App\DesignPatterns\Comportamentals\TemplateMethod\File;

use App\DesignPatterns\Comportamentals\TemplateMethod\File\AbstractFileGenerator as FileGenerator;

class Xml extends FileGenerator
{
    protected function formatName(string $name): string
    {
        return str_replace(' ', '_', $name);
    }

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

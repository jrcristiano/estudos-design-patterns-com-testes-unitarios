<?php

namespace App\DesignPatterns\Comportamentals\TemplateMethod\File;

abstract class AbstractFileGenerator
{
    public function createFile(array $data, string $option = 'W')
    {
        $name = $this->formatName($data['name']);
        $size = $this->calculateSize($data['content']);
        $extension = $this->takeExtension($data['name']);

        $this->generateFile([
            'name' => $name,
            'content' => $data['content'],
            'size' => $size,
            'ext' => $extension
        ]);
    }

    protected function formatName(string $name): string
    {
        return str_replace(' ', '-', $name);
    }

    protected function takeExtension(string $name): string
    {
        $start = strlen($name);
        $ext = substr($name, -3, $start);
        return strtoupper($ext);
    }

    final protected function calculateSize(string $content): float
    {
        return strlen($content) * 2;
    }

    final protected function generateFile(array $data, $option = 'W')
    {
        // create file
    }
}

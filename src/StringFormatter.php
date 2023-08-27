<?php

declare(strict_types=1);

namespace supervoron\FormatterComposerPackage;

class StringFormatter
{
    public function toUpperCase(string $str): string
    {
        return strtoupper($str);
    }
}
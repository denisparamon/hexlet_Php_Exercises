<?php

namespace App;

interface SanitizerInterface
{
    public function sanitize($text);
}

class Sanitizer implements SanitizerInterface
{
    public function sanitize($text)
    {
        // Очищаем от концевых пробелов
        return trim($text);
    }
}

<?php

namespace App;

class SanitizerStripTagsDecorator implements SanitizerInterface
{
    private $sanitizer;

    public function __construct(SanitizerInterface $sanitizer)
    {
        $this->sanitizer = $sanitizer;
    }

    public function sanitize($text)
    {
        // Сначала удаляем теги, затем очищаем от концевых пробелов
        $textWithoutTags = strip_tags($text);
        return $this->sanitizer->sanitize($textWithoutTags);
    }
}

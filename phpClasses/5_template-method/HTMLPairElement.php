<?php

namespace App;

class HTMLPairElement extends HTMLElement
{
    private $body = '';

    public function __toString()
    {
        $attributesString = $this->stringifyAttributes();
        return "<{$this->tagName}{$attributesString}>{$this->body}</{$this->tagName}>";
    }

    public function getTextContent()
    {
        return $this->body;
    }

    public function setTextContent(string $body)
    {
        $this->body = $body;
    }

    protected function stringifyAttributes()
    {
        // Формируем строку с аттрибутами, если они есть
        $attributesString = '';
        foreach ($this->attributes as $key => $value) {
            $attributesString .= ' ' . $key . '="' . $value . '"';
        }
        return $attributesString;
    }

    public function __construct(array $attributes = [], string $tagName = 'div')
    {
        parent::__construct($attributes);
        $this->tagName = $tagName;
    }
}

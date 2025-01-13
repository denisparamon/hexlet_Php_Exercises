<?php

namespace App;

class HTMLElement
{
    private $attributes = [];

    public function __construct($attributes = [])
    {
        $this->attributes = $attributes;
    }

    protected function stringifyAttributes()
    {
        $attributesString = '';

        foreach ($this->attributes as $key => $value) {
            $attributesString .= ' ' . $key . '="' . $value . '"';
        }

        return $attributesString;
    }
}

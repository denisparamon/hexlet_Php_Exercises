<?php

namespace App;

class HTMLDivElement extends HTMLPairElement
{
    public function __construct(array $attributes = [])
    {
        // Конструктор задает тег 'div' по умолчанию
        parent::__construct($attributes, 'div');
    }
}

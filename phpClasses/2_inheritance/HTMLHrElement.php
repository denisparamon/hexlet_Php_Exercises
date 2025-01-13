<?php

namespace App;

class HTMLHrElement extends HTMLElement
{
    public function __toString()
    {
        $attributesString = $this->stringifyAttributes();
        return '<hr' . $attributesString . '>';
    }
}

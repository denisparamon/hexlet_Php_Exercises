<?php

namespace App\parsers;

class JsonParser
{
    public function parse(string $content)
    {
        return json_decode($content, true);
    }
}

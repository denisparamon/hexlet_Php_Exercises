<?php

namespace App\parsers;

use Symfony\Component\Yaml\Yaml;

class YamlParser
{
    public function parse(string $content)
    {
        return Yaml::parse($content);
    }
}

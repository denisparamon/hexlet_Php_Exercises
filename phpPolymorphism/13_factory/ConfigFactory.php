<?php

namespace App;

use App\parsers\JsonParser;
use App\parsers\YamlParser;
use Symfony\Component\Yaml\Yaml;

class ConfigFactory
{
    public static function build(string $path)
    {
        $extension = pathinfo($path, PATHINFO_EXTENSION);
        $content = file_get_contents($path);

        switch ($extension) {
            case 'json':
                $parser = new JsonParser();
                break;
            case 'yml':
            case 'yaml':
                $parser = new YamlParser();
                break;
            default:
                throw new \Exception("Unsupported file format: $extension");
        }

        $data = $parser->parse($content);
        return new Config($data);
    }
}

<?php

namespace App;

class Truncater
{
    public const OPTIONS = [
        'separator' => '...',
        'length' => 200,
    ];

    private $options;

    public function __construct(array $options = [])
    {
        $this->options = array_merge(self::OPTIONS, $options);
    }


    public function truncate(string $string, array $options = [])
    {
        $currentOptions = array_merge($this->options, $options);
        if (strlen($string) <= $currentOptions['length']) {
            return $string;
        }
        return substr($string, 0, $currentOptions['length']) . $currentOptions['separator'];
    }
}

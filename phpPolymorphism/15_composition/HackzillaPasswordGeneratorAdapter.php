<?php

namespace App;

use Hackzilla\PasswordGenerator\Generator\ComputerPasswordGenerator;

class HackzillaPasswordGeneratorAdapter implements PasswordGeneratorInterface
{
    private object $generator;
    private $options = [
        'upperCase' => ComputerPasswordGenerator::OPTION_UPPER_CASE,
        'numbers' => ComputerPasswordGenerator::OPTION_NUMBERS,
        'symbols' => ComputerPasswordGenerator::OPTION_SYMBOLS
    ];

    public function __construct()
    {
        $this->generator = new ComputerPasswordGenerator();
    }
    // BEGIN (write your solution here)
    public function generatePassword($length, $options)
    {
        $this->generator
            ->setLength($length);
        foreach ($this->options as $optionName => $optionValue) {
            $value = in_array($optionName, $options);
            $this->generator
                ->setOptionValue($optionValue, $value);
        }
        return $this->generator->generatePassword();
    }
    // END
}
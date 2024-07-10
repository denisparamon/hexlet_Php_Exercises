<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Implementations\Validator;

class SolutionTest extends TestCase
{
    public function testValidator(): void
    {
        $validator = new Validator();

        $this->assertTrue($validator->isValid('any value'), 'Test case 1 failed');
        $this->assertTrue($validator->isValid(123), 'Test case 1 failed');
        $this->assertTrue($validator->isValid(null), 'Test case 1 failed');

        $validator->addCheck(fn($v) => is_string($v));
        $this->assertTrue($validator->isValid('string value'), 'Test case 2 failed');
        $this->assertFalse($validator->isValid(123), 'Test case 2 failed');
        $this->assertFalse($validator->isValid(null), 'Test case 2 failed');

        $validator->addCheck(fn($v) => strlen($v) > 5);
        $this->assertTrue($validator->isValid('long string'), 'Test case 3 failed');
        $this->assertFalse($validator->isValid('short'), 'Test case 3 failed');

        $validator->addCheck(fn($v) => strpos($v, ' ') !== false);
        $this->assertTrue($validator->isValid('a valid string'), 'Test case 4 failed');
        $this->assertFalse($validator->isValid('longstring'), 'Test case 4 failed');

        $validator->addCheck(fn($v) => strtolower($v) === $v);
        $this->assertTrue($validator->isValid('a valid string'), 'Test case 5 failed');
        $this->assertFalse($validator->isValid('A valid string'), 'Test case 5 failed');
        $this->assertFalse($validator->isValid('A Valid String'), 'Test case 5 failed');
        $this->assertFalse($validator->isValid(''), 'Test case 5 failed');
    }
}

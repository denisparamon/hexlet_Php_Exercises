<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;

use function App\Implementations\gt;

class TestSolution extends TestCase
{
    public function testGt()
    {
        $result1 = gt(3, 1);
        $this->assertTrue($result1);

        $result2 = gt(3, 3);
        $this->assertFalse($result2);

        $result3 = gt(1, 3);
        $this->assertFalse($result3);
    }
}

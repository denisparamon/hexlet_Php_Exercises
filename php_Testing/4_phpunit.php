<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use function App\Implementations\without;

class TestSolution extends TestCase
{
    public function testWithout()
    {
        $result1 = without([2, 1, 2, 3], [1, 2]);
        $this->assertEquals([3], $result1);

        $result2 = without([2, 1, 2, 3]);
        $this->assertEquals([2, 1, 2, 3], $result2);

        $result3 = without([1, 2, 3], [4, 5]);
        $this->assertEquals([1, 2, 3], $result3);

        $result4 = without([1, 2, 3], []);
        $this->assertEquals([1, 2, 3], $result4);

        $result5 = without([1, 2, 3], [1, 2, 3]);
        $this->assertEquals([], $result5);

        $result6 = without([1, 2, 3], [4, 5]);
        $this->assertEquals([1, 2, 3], $result6);
    }
}

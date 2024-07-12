<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;

use function App\Implementations\get;
use function App\Implementations\indexOf;
use function App\Implementations\slice;

class SolutionTest extends TestCase
{
    public function testGet()
    {
        $actual1 = get([1, 2, 3, 4], 2, 'a');
        $this->assertEquals(3, $actual1);

        $actual2 = get([1, 2, 3, 4], 7, 'a');
        $this->assertEquals('a', $actual2);

        $actual3 = get([1, 2, 3, 4], 7);
        $this->assertNull($actual3);

        // BEGIN (write your solution here)
        // Эта функция полностью покрыта тестами
        // END
    }

    public function testSlice()
    {
        $actual1 = slice([1, 2, 3, 4, 5, 6], 1, 4);
        $this->assertEquals([2, 3, 4], $actual1);

        // BEGIN (write your solution here)
        $actual2 = slice([1, 2, 3, 4, 5, 6], -4, -2);
        $this->assertEquals([3, 4], $actual2);

        $this->assertEquals([], slice([]));

        $actual3 = slice([1, 2, 3, 4], -10, 10);
        $this->assertEquals([1, 2, 3, 4], $actual3);
        // END
    }

    public function testIndexOf()
    {
        $actual1 = indexOf([2, 1, 3, 2, 4], 2);
        $this->assertEquals(0, $actual1);

        // BEGIN (write your solution here)
        $actual2 = indexOf([1, 2, 3, 2, 4], 2, -3);
        $this->assertEquals(3, $actual2);

        $actual3 = indexOf([1, 2, 2], 2, -10);
        $this->assertEquals(1, $actual3);

        $actual4 = indexOf([], 0);
        $this->assertEquals(-1, $actual4);
        // END
    }
}

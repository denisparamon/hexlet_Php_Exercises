<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;

use function App\Implementations\countFiles;

class SolutionTest extends TestCase
{
    public function testCountFiles(): void
    {
        $path = realpath(__DIR__ . '/../fixtures/nested');

        $dummyLogger = function ($message) {
        };
        $filesCount = countFiles($path, $dummyLogger);

        $expectedCount = 3;

        $this->assertEquals($expectedCount, $filesCount);
    }
}

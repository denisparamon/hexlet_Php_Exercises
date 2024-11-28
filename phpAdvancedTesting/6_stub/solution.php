<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use function App\getUserMainLanguage;

class SolutionTest extends TestCase
{
    public function testGetUserMainLanguage(): void
    {
        $client = $this->createMock(\App\RepositoryClient::class);

        $client->method('repos')
            ->with('tirion')
            ->willReturn([
                ['language' => 'php'],
                ['language' => 'php'],
                ['language' => 'js'],
                ['language' => 'js'],
                ['language' => 'js'],
                ['language' => 'ruby'],
            ]);

        $result = getUserMainLanguage('tirion', $client);

        $this->assertEquals('js', $result);
    }
}

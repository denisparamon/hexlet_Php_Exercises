<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use function App\Implementations\buildUser;

class SolutionTest extends TestCase
{
    public function testStructure()
    {
        $keys = [
            'email' => '',
            'firstName' => '',
            'lastName' => '',
        ];

        $user = buildUser();

        $difference = array_merge(array_diff_key($keys, $user), array_diff_key($user, $keys));
        $this->assertEmpty($difference);
    }

    public function testUniqueness()
    {
        $user1 = buildUser();
        $user2 = buildUser();

        $difference = array_merge(array_diff($user1, $user2), array_diff($user2, $user1));

        $this->assertNotEmpty($difference);
    }

    public function testSetParamValue()
    {
        $values = [
            'email' => 'some@mail.com',
            'firstName' => 'Petya',
            'lastName' => 'Zulauf'
        ];

        $user = buildUser($values);

        $difference = array_merge(array_diff_assoc($values, $user), array_diff_assoc($user, $values));
        $this->assertEmpty($difference);
    }
}

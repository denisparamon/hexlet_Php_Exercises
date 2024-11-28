<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Db;
use App\Variant\User;

class SolutionTest extends TestCase
{
    public function testSaveCallsQueryOnceForNewUser()
    {
        $dbMock = $this->createMock(Db::class);
        $dbMock->expects($this->once())
            ->method('query')
            ->with($this->equalTo("insert into users ('', '')"));

        $user = new User($dbMock);
        $user->save();
    }

    public function testSaveCallsQueryAgainAfterSettingFirstName()
    {
        $dbMock = $this->createMock(Db::class);

        $dbMock->expects($this->exactly(2))
            ->method('query')
            ->with($this->stringContains("insert into users"));

        $user = new User($dbMock);
        $user->save();
        $user->setFirstName("John");
        $user->save();
    }

    public function testSaveDoesNotCallQueryIfNoChanges()
    {
        $dbMock = $this->createMock(Db::class);

        $dbMock->expects($this->once())
            ->method('query')
            ->with($this->stringContains("insert into users"));

        $user = new User($dbMock);
        $user->save();
        $user->save();

        $this->assertTrue(true);
    }
}

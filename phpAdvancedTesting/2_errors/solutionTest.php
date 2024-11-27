<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Acl\Acl;

require_once 'src/App/Acl/AccessDenied.php';
require_once 'src/App/Acl/ResourceUndefined.php';
require_once 'src/App/Acl/PrivilegeUndefined.php';

class SolutionTest extends TestCase
{
    private static $data = [
        'articles' => [
            'show' => ['editor', 'manager'],
            'edit' => ['editor']
        ],
        'money' => [
            'create' => ['editor'],
            'show' => ['editor', 'manager'],
            'edit' => ['manager'],
            'remove' => ['manager']
        ]
    ];

    public function testAccessDenied()
    {
        $acl = new Acl(static::$data);

        // BEGIN (write your solution here)
        try {
            $acl->check('money', 'create', 'manager');
            $this->fail('expected exception');
        } catch (\App\Acl\AccessDenied $e) {
        }
        // END
    }

    // BEGIN (write your solution here)
    public function testResourceUndefined()
    {
        $acl = new Acl(static::$data);

        try {
            $acl->check('undefined resources', 'edit', 'manager');
            $this->fail('expected exception');
        } catch (\App\Acl\ResourceUndefined $e) {
        }
    }

    public function testPrivilegeUndefined()
    {
        $acl = new Acl(static::$data);

        try {
            $acl->check('articles', 'move', 'manager');
            $this->fail('expected exception');
        } catch (\App\Acl\PrivilegeUndefined $e) {
        }
    }
    // END
}

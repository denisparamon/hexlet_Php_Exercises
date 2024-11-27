<?php

namespace App\Tests;

use org\bovigo\vfs\{
    vfsStream,
    vfsStreamDirectory
};

use function App\Implementations\mkdirs;

// phpcs:disable
require getenv('COMPOSER_VENDOR_DIR') . '/autoload.php';
// phpcs:enable

use PHPUnit\Framework\TestCase;

// BEGIN (write your solution here)
// END

class SolutionTest extends TestCase
{
    // BEGIN (write your solution here)
    /**
     * @var  vfsStreamDirectory
     */
    private $root;

    public function setUp(): void
    {
        $this->root = vfsStream::setup('exampleDir');
    }

    public function testDirectoriesIsCreated()
    {
        $directoryPath = vfsStream::url('exampleDir');
        $innerDirectoryPath = $directoryPath . '/inner';
        mkdirs($innerDirectoryPath);
        $this->assertTrue($this->root->hasChildren('inner'));
    }
    // END
}

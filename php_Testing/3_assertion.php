<?php

namespace App\Tests;

use Webmozart\Assert\Assert;

use function App\Implementations\take;

$functionName = getenv('FUNCTION_VERSION');
require_once __DIR__ . "/../implementations/take.{$functionName}.php";

Assert::eq(take([], 2), []);
Assert::eq(take([1, 2, 3]), [1]);
Assert::eq(take([1, 2, 3], 2), [1, 2]);
Assert::eq(take([4, 3], 9), [4, 3]);

Assert::eq(take([0 => 1], 1), [1]);
Assert::eq(take([0 => 1, 1 => 2, 2 => 3], 2), [1, 2]);
Assert::eq(take([0 => 1, 1 => 2, 2 => 3], 3), [1, 2, 3]);
Assert::eq(take([0 => 1, 1 => 2, 2 => 3], 0), []);
Assert::eq(take([], 1), []);

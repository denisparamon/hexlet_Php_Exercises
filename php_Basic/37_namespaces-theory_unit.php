<?php

// phpcs:disable PSR1.Files.SideEffects

namespace Solution;

require_once "Strings.php";

use function Strings\reverse;

function isPalindrome(string $word)
{
    $reversed = reverse($word);
    if ($word === $reversed) {
        return true;
    } else {
        return false;
    }
}

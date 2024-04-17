<?php

// phpcs:disable PSR1.Files.SideEffects

function isPalindrome($str)
{
    require_once 'src/Strings.php';
    $reverse = reverse($str);
    if ($str === $reverse) {
        return true;
    } else {
        return false;
    }
}

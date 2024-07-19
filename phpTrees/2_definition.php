<?php

namespace App\removeFirstLevel;

function removeFirstLevel($tree)
{
    $result = [];
    foreach ($tree as $node) {
        if (is_array($node)) {
            foreach ($node as $child) {
                $result[] = $child;
            }
        }
    }
    return $result;
}

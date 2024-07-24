<?php

namespace App\findFilesByName;

use function Php\Immutable\Fs\Trees\trees\isFile;
use function Php\Immutable\Fs\Trees\trees\getName;
use function Php\Immutable\Fs\Trees\trees\getChildren;

function findFilesByName($tree, $substring, $currentPath = '')
{
    $name = getName($tree);
    $currentPath = $currentPath === '' ? $name : rtrim($currentPath, '/') . '/' . $name; // убираем лишний слеш
    $result = [];

    if (isFile($tree)) {
        if (strpos($name, $substring) !== false) {
            $result[] = $currentPath;
        }
    } else {
        $children = getChildren($tree);
        foreach ($children as $child) {
            $result = array_merge($result, findFilesByName($child, $substring, $currentPath));
        }
    }

    return $result;
}
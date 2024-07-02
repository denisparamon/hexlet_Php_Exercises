<?php

namespace App\Users;

function getChildren(array $users)
{
    $children = [];
    foreach ($users as $user) {
        $children = array_merge($children, $user['children']);
    }
    return $children;
}

<?php

namespace App\Users;

use Funct\Collection;

function getManWithLeastFriends($users)
{
    if (empty($users)) {
        return null;
    }

    $result = array_reduce($users, function ($acc, $user) {
        if ($acc === null || count($user['friends']) <= count($acc['friends'])) {
            return $user;
        }
        return $acc;
    }, null);

    return $result;
}

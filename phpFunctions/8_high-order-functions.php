<?php

namespace App\Users;

use function Funct\Collection\firstN;

function takeOldest($users, $limit = 1)
{
    usort($users, function ($a, $b) {
        return strtotime($a['birthday']) <=> strtotime($b['birthday']);
    });

    return array_slice($users, 0, $limit);
}

<?php

namespace App\Users;

function getMenCountByYear($users)
{
    return array_reduce($users, function ($acc, $user) {
        if ($user['gender'] === 'male') {
            $year = date('Y', strtotime($user['birthday']));
            if (!isset($acc[$year])) {
                $acc[$year] = 0;
            }
            $acc[$year]++;
        }
        return $acc;
    }, []);
}

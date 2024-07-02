<?php

namespace App\Users;

use function Funct\Collection\flatten;

function getGirlFriends(array $users): array
{
    $girlFriends = array_reduce($users, function ($carry, $user) {
        $friends = array_filter($user['friends'], function ($friend) {
            return $friend['gender'] === 'female';
        });

        return array_merge($carry, array_values($friends));
    }, []);

    return $girlFriends;
}

//Функция getGirlFriends принимает массив пользователей $users.
//Внутри array_reduce мы обходим каждого пользователя.
//Для каждого пользователя используем array_filter, чтобы отфильтровать его друзей по полу 'female'.
//Результат каждого array_filter добавляем в общий массив с помощью array_merge.
//В конце мы используем array_values, чтобы получить плоский индексированный массив из всех подруг.

// СТРЕЛОЧНЫЙ ВАРИАНТ

// function getGirlFriends(array $users): array
// {
//     return array_reduce($users, fn($carry, $user) =>
//         array_merge($carry, array_values(array_filter($user['friends'], fn($friend) =>
//             $friend['gender'] === 'female'
//         ))), []);
// }

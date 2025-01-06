
<?php

namespace App\Helpers;

function getGreeting($user)
{
    if ($user->isGuest()) {
        return 'Nice to meet you Guest!';
    }
    return 'Hello ' . $user->getName() . '!';
}

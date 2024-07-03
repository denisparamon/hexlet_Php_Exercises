<?php

namespace App\Emails;

const FREE_EMAIL_DOMAINS = [
    'gmail.com', 'yandex.ru', 'hotmail.com'
];

function getFreeDomainsCount($emails)
{
    $domainCounts = [];

    foreach ($emails as $email) {
        $domain = substr(strrchr($email, "@"), 1);
        if (in_array($domain, FREE_EMAIL_DOMAINS)) {
            if (!isset($domainCounts[$domain])) {
                $domainCounts[$domain] = 0;
            }
            $domainCounts[$domain]++;
        }
    }
    return $domainCounts;
}

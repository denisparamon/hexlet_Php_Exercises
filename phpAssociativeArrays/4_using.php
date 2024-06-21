<?php

namespace App\Domains;

function getDomainInfo($url)
{
    if (strpos($url, 'http://') !== 0 && strpos($url, 'https://') !== 0) {
        $url = 'http://' . $url;
    }

    $parsedUrl = parse_url($url);

    return [
        'scheme' => $parsedUrl['scheme'],
        'name' => $parsedUrl['host']
    ];
}

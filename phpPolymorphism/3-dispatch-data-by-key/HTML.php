<?php

namespace App\HTML;

function getLinks(array $tags): array
{
    $links = [];

    foreach ($tags as $tag) {
        // Проверяем имя тега и наличие соответствующего атрибута
        if ($tag['name'] === 'a' && isset($tag['href'])) {
            $links[] = $tag['href'];
        } elseif ($tag['name'] === 'link' && isset($tag['href'])) {
            $links[] = $tag['href'];
        } elseif ($tag['name'] === 'img' && isset($tag['src'])) {
            $links[] = $tag['src'];
        }
    }

    return $links;
}

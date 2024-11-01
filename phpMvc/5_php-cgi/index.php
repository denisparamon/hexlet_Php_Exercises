<?php

$uri = $_SERVER['REQUEST_URI'];

if ($uri === '/') {
    echo '<a href="/welcome">welcome</a><br>';
    echo '<a href="/not-found">not-found</a>';
} elseif ($uri === '/welcome') {
    echo '<a href="/">main</a>';
} else {
    http_response_code(404);
    echo 'Page not found. <a href="/">main</a>';
}

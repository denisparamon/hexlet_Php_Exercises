<?php

namespace App\Arrays;

function getComposerFileData()
{
    return [
        "autoload" => [
            "files" => [
                "src/Arrays.php"
            ]
        ],
        "config" => [
            "vendor-dir" => "/composer/vendor"
        ]
    ];
}

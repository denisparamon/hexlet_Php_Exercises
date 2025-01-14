<?php

namespace App\Utils;

use App\File;

function readFiles(array $files)
{
    $results = [];
    foreach ($files as $filePath) {
        try {
            $file = new File($filePath);
            $results[] = $file->read();
        } catch (\Exception $e) {
            $results[] = null;
        }
    }
    return $results;
}

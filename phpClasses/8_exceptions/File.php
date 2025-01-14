<?php

namespace App;

use App\Exceptions\NotExistsException;
use App\Exceptions\NotReadableException;

class File
{
    private $path;

    public function __construct($path)
    {
        $this->path = $path;
    }

    public function read()
    {
        if (!file_exists($this->path)) {
            throw new NotExistsException("File does not exist: {$this->path}");
        }

        if (!is_readable($this->path)) {
            throw new NotReadableException("File is not readable: {$this->path}");
        }

        return file_get_contents($this->path);
    }
}

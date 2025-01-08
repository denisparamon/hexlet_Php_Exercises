<?php

namespace App;

class InMemoryKV implements KeyValueStorageInterface
{
    private array $db;

    public function __construct($initial = [])
    {
        $this->db = $initial;
    }

    public function set($key, $value)
    {
        $this->db[$key] = $value;
    }

    public function unset($key)
    {
        unset($this->db[$key]);
    }

    public function get($key, $default = null)
    {
        return $this->db[$key] ?? $default;
    }

    public function toArray()
    {
        return $this->db;
    }

    public function serialize()
    {
        return json_encode($this->db);
    }

    public function unserialize($db)
    {
        $this->db  = json_decode($db, true);
    }
    public function getData()
    {
        return $this->db;
    }
}
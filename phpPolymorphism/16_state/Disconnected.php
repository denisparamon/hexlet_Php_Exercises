<?php

namespace App\states;

class Disconnected
{
/ BEGIN
    private $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function getName()
    {
        return 'disconnected';
    }

    public function connect()
    {
        $this->connection->setState(Connected::class);
    }

    public function disconnect()
    {
        throw new \Exception('Connection already disconnected');
    }

    public function write($data)
    {
        throw new \Exception('It is not possible write to closed connection');
    }
    // END
}

<?php

namespace App\states;

class Connected
{
    // BEGIN
    private $buffer;
    private $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function connect()
    {
        throw new \Exception('Connection has established already');
    }

    public function disconnect()
    {
        $this->connection->setState(Disconnected::class);
    }

    public function write($data)
    {
        $this->buffer[] = $data;
    }

    public function getName()
    {
        return 'connected';
    }
    // END
}

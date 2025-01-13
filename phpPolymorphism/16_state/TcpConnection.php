<?php

namespace App;

class TcpConnection implements TcpConnectionInterface
{
    private $ip;
    private $port;
    private $state;

    // BEGIN
    public function __construct($ip, $port)
    {
        $this->ip = $ip;
        $this->port = $port;
        $this->setState(states\Disconnected::class);
    }

    public function getCurrentState()
    {
        return $this->state->getName();
    }

    public function connect()
    {
        $this->state->connect();
    }

    public function disconnect()
    {
        $this->state->disconnect();
    }

    public function write($data)
    {
        $this->state->write($data);
    }

    public function setState(string $stateClassName)
    {
        $this->state = new $stateClassName($this);
    }
    // END
}

<?php

namespace App;

class User
{
    private $currentSubscription;
    private $email;

    public function __construct($email, $currentSubscription = null)
    {
        $this->email = $email;

        // Если подписка передана, используем её
        if ($currentSubscription) {
            $this->currentSubscription = $currentSubscription;
        } else {
            // Если подписка не передана, создаём фейковую
            $this->currentSubscription = new FakeSubscription($this);
        }
    }

    public function getCurrentSubscription()
    {
        return $this->currentSubscription;
    }

    public function isAdmin()
    {
        return $this->email === 'rakhim@hexlet.io';
    }
}

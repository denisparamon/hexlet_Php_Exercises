<?php

namespace App;

class FakeSubscription
{
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function hasPremiumAccess()
    {
        return $this->user->isAdmin();
    }

    public function hasProfessionalAccess()
    {
        return $this->user->isAdmin();
    }
}

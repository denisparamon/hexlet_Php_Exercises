<?php

// ComparableInterface.php

namespace App;

interface ComparableInterface
{
    public function compareTo($other): bool;
}

// User.php

namespace App;

class User implements ComparableInterface
{
    private int $id;
    private string $name;

    public function __construct(int $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function compareTo($other): bool
    {
        if (!$other instanceof User) {
            throw new \InvalidArgumentException('The object to compare must be an instance of User');
        }

        return $this->id === $other->getId();
    }

    public function getId(): int
    {
        return $this->id;
    }
}

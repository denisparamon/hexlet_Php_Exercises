<?php

namespace App;

use Illuminate\Support\Collection;

class DeckOfCards
{
    private Collection $deck;
    public function __construct(array $cardValues)
    {
        $this->deck = collect($cardValues)
            ->flatMap(fn($value) => array_fill(0, 4, $value))
            ->shuffle();
    }
    public function getShuffled(): array
    {
        return $this->deck->shuffle()->toArray();
    }
}

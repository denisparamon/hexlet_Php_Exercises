<?php

namespace App;

trait Enumerable
{
    abstract public function getIterator(): iterable;

    public function maxBy(callable $fn)
    {
        $items = iterator_to_array($this->getIterator());

        if (empty($items)) {
            return null;
        }

        usort($items, $fn);

        return end($items);
    }
}

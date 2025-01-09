<?php

namespace App\strategies;

class Easy
{
// BEGIN
    public function getNextStep($map)
    {
        foreach ($map as $i => $row) {
            foreach ($row as $j => $value) {
                if ($value === null) {
                    return [$i, $j];
                }
            }
        }
    }
    // END
}

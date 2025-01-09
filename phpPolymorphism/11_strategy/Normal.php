<?php

namespace App\strategies;

class Normal
{
    // BEGIN
    public function getNextStep($map)
    {
        for ($i = 3; $i >= 1; $i--) {
            foreach ($map[$i] as $j => $value) {
                if ($value === null) {
                    return [$i, $j];
                }
            }
        }
    }
    // END
}

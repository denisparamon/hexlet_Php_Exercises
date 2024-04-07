<?php

function revert($kot)
{
    $i = 0;
    $result = '';

    while ($i < strlen($kot)) {
        $simbol = $kot[$i];
        $result = "{$simbol}{$result}";
        $i = $i + 1;
    }

    echo ($result);
    return;
}

revert('Kot');
<?php

namespace App\Rational;

use function App\Utils\gcd;

// BEGIN

function makeRational($numer, $denom)
{
    $gcdValue = gcd(abs($numer), abs($denom));
    $numer /= $gcdValue;
    $denom /= $gcdValue;
    // Ensure the denominator is positive
    if ($denom < 0) {
        $numer = -$numer;
        $denom = -$denom;
    }
    return ['numer' => $numer, 'denom' => $denom];
}

function getNumer($rat)
{
    return $rat['numer'];
}

function getDenom($rat)
{
    return $rat['denom'];
}

function add($rat1, $rat2)
{
    $numer = getNumer($rat1) * getDenom($rat2) + getNumer($rat2) * getDenom($rat1);
    $denom = getDenom($rat1) * getDenom($rat2);
    return makeRational($numer, $denom);
}

function sub($rat1, $rat2)
{
    $numer = getNumer($rat1) * getDenom($rat2) - getNumer($rat2) * getDenom($rat1);
    $denom = getDenom($rat1) * getDenom($rat2);
    return makeRational($numer, $denom);
}

// END

function ratToString($rat)
{
    return getNumer($rat) . '/' . getDenom($rat);
}

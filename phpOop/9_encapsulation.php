<?php

namespace App;

class Rational
{
    private $numer; // числитель
    private $denom; // знаменатель

    public function __construct($numer, $denom)
    {
        $this->numer = $numer;
        $this->denom = $denom;
    }

    public function getNumer()
    {
        return $this->numer;
    }

    public function getDenom()
    {
        return $this->denom;
    }

    public function add(Rational $other)
    {
        // Сложение дробей: a/b + c/d = (a*d + b*c) / (b*d)
        $newNumer = $this->numer * $other->denom + $this->denom * $other->numer;
        $newDenom = $this->denom * $other->denom;

        return new Rational($newNumer, $newDenom);
    }

    public function sub(Rational $other)
    {
        // Вычитание дробей: a/b - c/d = (a*d - b*c) / (b*d)
        $newNumer = $this->numer * $other->denom - $this->denom * $other->numer;
        $newDenom = $this->denom * $other->denom;

        return new Rational($newNumer, $newDenom);
    }
}

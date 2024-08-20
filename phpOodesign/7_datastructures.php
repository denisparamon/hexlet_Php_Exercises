<?php

namespace App\Comparator;

use Ds\Stack;

function processString($sequence)
{
    $stack = new Stack();
    foreach (str_split($sequence) as $char) {
        if ($char === '#') {
            if (!$stack->isEmpty()) {
                $stack->pop();
            }
        } else {
            $stack->push($char);
        }
    }
    // Преобразуем стек обратно в строку
    return implode('', $stack->toArray());
}

function compare($seq1, $seq2)
{
    $processedSeq1 = processString($seq1);
    $processedSeq2 = processString($seq2);
    return $processedSeq1 === $processedSeq2;
}

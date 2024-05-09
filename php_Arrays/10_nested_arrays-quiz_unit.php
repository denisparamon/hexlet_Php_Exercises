<?php

namespace App\Superseries;

function getSuperSeriesWinner($scores)
{
    $canada = 0;
    $ussr = 0;
    foreach ($scores as $score) {
        if ($score[0] === $score[1]) {
            // Ничья, ничего не делаем
        } elseif ($score[0] > $score[1]) {
            $canada++;
        } else {
            $ussr++;
        }
    }
    if ($canada === $ussr) {
        return null;
    } elseif ($canada > $ussr) {
        return 'canada';
    } else {
        return 'ussr';
    }
}

////Решение Хекслет
//function getSuperSeriesWinner($scores)
//{
//    $result = 0;
//    foreach ($scores as $score) {
//        // $result = $result + ($score[0] <=> $score[1]);
//        $result += $score[0] <=> $score[1];
//    }
//
//    if ($result > 0) {
//        return 'canada';
//    } elseif ($result < 0) {
//        return 'ussr';
//    }
//
//    return null;
//}
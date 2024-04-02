<?php
//
//function getTypeOfSentence($sentence)
//{
//    // Простой способ извлечь последний символ
//    $lastChar = $sentence[-1];
//    if ($lastChar === '?') {
//        return 'question';
//    }
//
//    return 'normal';
//}
//
////$result = getTypeOfSentence('Hodor');  // normal
//$result = getTypeOfSentence('Hodor?'); // question
//
//var_dump($result);

//function getTypeOfSentence($sentence)
//{
//    $lastChar = $sentence[-1];
//
//    if ($lastChar === '?') {
//        $sentenceType = 'question';
//    } else {
//        $sentenceType = 'normal';
//    }
//
//    return "Sentence is {$sentenceType}";
//}
//
//$result = getTypeOfSentence('Hodor');  // Sentence is normal
////$result = getTypeOfSentence('Hodor?'); // Sentence is question
//
//print_r($result);

//function getTypeOfSentence($sentence)
//{
//    $lastChar = $sentence[-1];
//
//    if ($lastChar !== '?') {
//        $sentenceType = 'normal';
//    } else {
//        $sentenceType = 'question';
//    }
//
//    return "Sentence is {$sentenceType}";
//}
//
//$result = getTypeOfSentence('Hodor');  // Sentence is normal
////$result = getTypeOfSentence('Hodor?'); // Sentence is question
//
//print_r($result);

//function getTypeOfSentence($sentence)
//{
//    $lastChar = $sentence[-1];
//
//    if ($lastChar === '!') {
//        $sentenceType = 'exclamation';
//    } else {
//        $sentenceType = 'normal';
//    }
//
//    if ($lastChar === '?') {
//        $sentenceType = 'question';
//    }
//
//    return "Sentence is {$sentenceType}";
//}
//
//$result = getTypeOfSentence('Who?'); // 'Sentence is question'
////$result = getTypeOfSentence('No');   // 'Sentence is normal'
////$result = getTypeOfSentence('No!');  // 'Sentence is exclamation'
//
//print_r($result);

//function getTypeOfSentence($sentence)
//{
//    $lastChar = $sentence[-1];
//
//    if ($lastChar === '?') {
//        $sentenceType = 'question';
//    } elseif ($lastChar === '!') {
//        $sentenceType = 'exclamation';
//    } else {
//        $sentenceType = 'normal';
//    }
//
//    return "Sentence is {$sentenceType}";
//}
//
//$result = getTypeOfSentence('Who?'); // 'Sentence is question'
////$result = getTypeOfSentence('No');   // 'Sentence is normal'
////$result = getTypeOfSentence('No!');  // 'Sentence is exclamation'
//
//print_r($result);

// //Решение через использование функции strpos:

// function normalizeUrl($url, $defUrl = 'http://', $defUrlTwo = 'https://')
// {
//     $pos = strpos($url, $defUrl);
//     $pos2 = strpos($url, $defUrlTwo);
//     if ($pos === 0) {
//         $position = 4;
//         $symbol = 's';
//         $urls = substr_replace($url, $symbol, $position, 0);
//         return $urls;
//     } elseif ($pos2 === 0) {
//         return $url;
//     } else {
//         return 'https://' . $url;
//     }
// }
// // $result = normalizeUrl('lohpidr.com');
// // $result = normalizeUrl('http://lohpidr.com');
// // print_r($result);

// Решение первым вариантом, сравнение первых символов в адресной строке
function normalizeUrl($url, $defUrl = 'http://', $defUrlTwo = 'https://')
{
    if (strncmp($url, $defUrl, 7) === 0) {
        $position = 4;
        $symbol = 's';
        $urls = substr_replace($url, $symbol, $position, 0);
        return $urls;
    } elseif (strncmp($url, $defUrl, 8) === 0) {
        return $url;
    } else {
        return 'https://' . $url;
    }
}

// $result = normalizeUrl('lohpidr.com');
// //$result = normalizeUrl('http://lohpidr.com');
// print_r($result);


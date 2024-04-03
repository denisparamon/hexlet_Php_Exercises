<?php

$text = 'Never forget what you are, for surely the world will not';

// BEGIN (write your solution here)
$first = substr($text, 0, 1);
$last = substr($text, -1);

print_r("First: {$first}" . PHP_EOL . "Last: {$last}");

// END

//$string = "Hexlet";
//$firstChar = substr($string, 0, 1);
//echo $first_char; // => H
//
//	$last = substr('abcdef', -1)
//	echo $last;
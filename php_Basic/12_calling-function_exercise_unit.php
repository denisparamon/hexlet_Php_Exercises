<?php

$one = "Naharis";
$two = "Mormont";
$three = "Sand";

$result1 = substr($one, 2, 1);
$result2 = substr($two, 1 , 1);
$result3 = substr($three, 3, 1);
$result4 = substr($two, 1, 2);

print_r($result1 . $result2 . $result3 . $result4);

<?php

$numbers =  [2 , 5 , 7 , 10 , 19];
$uniqueNumbers = array_unique($numbers);
rsort($uniqueNumbers);
$thirdMax = $uniqueNumbers[2];
echo "Третье максимальное число в массиве: " . $thirdMax . "\n";
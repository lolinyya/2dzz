<?php

$n = 100;

echo "Простые числа от 1 до 100:\n";


for ($i = 2; $i <= $n; $i++) {
    $isPrime = true;

    for ($j = 2; $j < $i; $j++) {
        if ($i % $j == 0) {
            $isPrime = false; 
            break;
        }
    }

    if ($isPrime) {
        echo $i . " ";
    }
}
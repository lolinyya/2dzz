<?php

$a = (int)readline("Введите число для вычисления факториала: ");
$fact = 1; 
$n = $a; 

while ($a > 1) {
    $fact *= $a;
    $a--;
}

echo "Факториал числа " . $n . " = " . $fact;
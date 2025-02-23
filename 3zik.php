<?php
echo "Таблица умножения от 1 до 10:\n\n";
 
for ($i = 1; $i <= 10; $i++) { 
    for ($j = 1; $j <= 10; $j++) { 
        printf("%2d x %2d = %3d\t", $i, $j, $i * $j);
    }
    echo "\n";  
}
<?php 
function progressia($a,$b,$c){
    return ($b-$a) === ($c-$b);
}
$a = (int)readline("Введите первое число: ");
$b = (int)readline("Введите второе число: ");
$c = (int)readline("Введите третье число: ");
if (progressia($a, $b, $c)){
echo "DA";} else {
    echo "NET";
}

<?php 
function progressia($a,$b,$c){
    return ($b-$a) == ($c-$b);
}
$a = 3;
$b = 6;
$c = 9;
if (progressia($a, $b, $c)){
echo "DA";} else {
    echo "NET";
}
?>
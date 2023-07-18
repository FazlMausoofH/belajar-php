<?php 

$a = 10;
$b = 3;
$c = 2.5;
$d = 5;

var_dump("Hasil = ");
var_dump($a+$d/$c*$b);

$result = 20 + 30;
var_dump($result);

$result = 50 % 3;
var_dump($result);

$resultNegative = -$result;
var_dump($resultNegative);

$resultPositif = +$result;
var_dump($resultPositif);

var_dump($resultPositif + $resultNegative +$b -$c * $a) ;



?>
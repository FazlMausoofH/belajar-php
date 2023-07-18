<?php 

$total = 0;

$Bakmie = 5000;
$Baso = 2000;
$doubleAyam = 2500;
$pajak = 2000;

$total += $Bakmie;
$total += $Baso;
$total += $doubleAyam;
$total -= $doubleAyam;

echo ("Total Bayar : ");
var_dump($total * 3)

?>
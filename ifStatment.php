<?php

$nilai = 98;
$absen = 76;

if ($nilai >= 95 && $absen >=95){
    echo "Nilai Kamu A" . PHP_EOL;
}elseif($nilai >= 90 && $absen >=90){
    echo "Nilai Kamu B" . PHP_EOL;
}elseif($nilai >= 85 && $absen >=85){
    echo "Nilai Kamu C" . PHP_EOL;
}elseif($nilai >= 80 && $absen >=80){
    echo "Nilai Kamu D" . PHP_EOL;
}elseif($nilai >= 75 && $absen >=75){
    echo "Nilai kamu E" . PHP_EOL;
}else{
    echo "Kamu Gagal" . PHP_EOL;
};


$mtk = 80;
$indo = 75;
$ipa = 90;
$total = ($mtk+$indo+$ipa) /3 ;

if($total >= 90){
    echo "Kamu Jenius";
}elseif($total >= 80){
    echo "Kamu Hebat";
}elseif($total >= 75){
    echo "Kamu Lulus";
}else{
    echo "Kamu Gagal Ujian";
}


?>
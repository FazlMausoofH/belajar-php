<?php
$nama = readline("Masukan Nama Kamu : ");
$kelas = readline("Masukan Kelas Kamu :");
$jurusan = readline("Masukan Jurusan Kamu : ");
$mtk = readline("Masukan Nilai Mtk : ");
$ipa = readline("Masukan Nilai Ipa : ");
$indo = readline("Masukan Nilai Indo : ");

$total = ($mtk + $ipa + $indo) / 3 ;

$math = 
    $total = $GLOBALS['total'];
if($total >= 90){
    echo "Kamu Jenius";
}elseif($total >= 80){
    echo "Kamu Hebat";
}elseif($total >= 75){
    echo "Kamu Lulus";
}else{
    echo "Kamu Gagal Ujian";
}
;



echo "
Nama : $nama
kelas : $kelas
Jurusan : $jurusan
------------------------
Nilai : $total
keputusan : $math

"






















?>
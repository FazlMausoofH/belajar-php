<?php 

//variabel 
$nama ="Fazl Mausoof H";
$usia = 17;
$kelas = "12-rpl";

echo "Nama Saya $nama\n Usia Saya $usia\n dan saya kelas $kelas";
echo "</br>";

$nilai1 = 10;
$nilai2 = 5;
$nilai3 = 2;
echo "Hasil Dari 10x5:2 = ";
echo $nilai1*$nilai2/$nilai3;

echo "</br>";

$x = 5;
$y = 2;
echo $x * $y;
echo "</br>";

//Constant

define("AUTHOR", "Fazl Mausoof H");
define("USIA", 17);
define("JURUSAN", "Rekayasa Perangkat Lunak");

echo "Author : ";
echo AUTHOR;
echo "\n";

echo "Usia : ";
echo USIA;
echo "\n";

echo "Kelas : ";
echo JURUSAN;
echo "\n";

//Data NULL (kosong/dihapus) biasa digunakan untuk membuat isi variabel yang akan dibuat(kosong)

$nama = "Fazl Mausoof H";
$nama = null;

echo "Nama : ";
echo $nama;
echo "\n";

//is_null untuk cek isi variabel (mengecek null)

echo "is Name Null? = ";
var_dump(is_null($nama));

$kelaz = null;

echo "test : ";
echo is_null($kelaz);
echo "\n";

//unset(menghapus variabel)
$contoh ="Fazl";
unset($contoh);
// echo $contoh;//

//Mengecek ada tidak nya variabel beserta isi nya
$contoh = "red";
var_dump(isset($contoh));


?>
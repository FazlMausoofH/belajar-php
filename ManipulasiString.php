<?php   

// Dot Operator
$a = "Fazl";
$b = "Mausoof";
$c = "Hamid";

var_dump("Nama Saya Adalah " . $a . PHP_EOL . PHP_EOL . PHP_EOL);
var_dump("Kepanjanganya adalah " . $a . " " . $b . " " . $c);

//Konversi tipe data ( int atau float ke string / sebaliknya )
$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"100";
var_dump($valueInt);

$valueFloat = (float)"1000";
var_dump($valueFloat);

$values = (int)"1000.230";
var_dump($values);

// Mengakses Karakter
$name = "FAZL";
echo $name[2].PHP_EOL;
echo $name[1].PHP_EOL;
echo $name[0].PHP_EOL;
echo $name[3].PHP_EOL;
echo $name[3].PHP_EOL;

// Variabel pharsing
echo "Hallo $name, Selamat Datang". PHP_EOL;

// Curly Brace (membuat text di pinggir variabel)
echo "Hallo {$name}s, Selamat Datang"
?>
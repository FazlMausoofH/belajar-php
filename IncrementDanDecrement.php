<?php 

//$z++ // kembalikan nilai $z dan naikan 1 angka
//++$z //naikin 1 angka,lalu kembalikan $z
//$z-- // kembalikan nilai $z dan turunkan 1 angka
//--$z //turunkan 1 angka,lalu kembalikan nilai $z

// increment
$a = 10;
$z = 1;
$b = $a++; //hasil 10 ++(1)
$c = ++$a; //hasil 1+(1+10)
$f = ++$a; //hasil 1+(1+12)

$d = ++$z;
$d = ++$z;
$e = ++$z;

var_dump($f);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);

// decrement
$h = 5;
$m = $h--;
$h = 5;
$j = --$h;

var_dump($m);
var_dump($j)

?>
<?php 

$a = true;
$b = false;

var_dump($a && $a); //true jika $a dan $b keduanya true
var_dump($a and $b); //true jika $a dan $b keduanya true
var_dump($a || $a); //true jika $a dan $b salah satu atau keduanya true
var_dump($a or $b); //true jika $a dan $b salah satu atau keduanya true
var_dump(! $a); //[not]berfungsi membalikan nilai sebenarnya(jika nilai true maka false dan sebaliknya)
var_dump($a xor $b); //true jika $a dan $b salah satu true tapi tidak berlaku keduanya(false)

?>
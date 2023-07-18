<?php

// Operator Array [Union] (1)
$first = [
    "firstName" => "Fazl"
];
$last = [
    "firstName" => "Budi",
    "lastName" => "Mausoof"
];

var_dump($last+$first); // variabel yang awal di utamakan



// Operator Array (2)

$a = [
    "firstName" => "Fazl",
    "LastName" => "Mausoof"
];

$b = [
    "LastName" => "Mausoof",
    "firstName" => "Fazl"
];

var_dump($a == $b);
var_dump($a === $b);
var_dump($a != $b);
var_dump($a !== $b);


?>
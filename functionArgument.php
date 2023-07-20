<?php 

// Function Argument
// .......................
// function hallo($name ){
//     echo "Hallo $name" . PHP_EOL;
// };


// hallo  ("Fazl");
// hallo("Mausoof");

// Default function argument
// .............
// function hallo($name = "Anonymous"){
//     echo "Hallo $name" . PHP_EOL;
// };


// hallo  ("Fazl");
// hallo("Mausoof");
// hallo();

// .................
// function hallo($name,$last = "S.Kom"){
//     echo "Hallo $name $last" . PHP_EOL;
// };

// hallo  ("","Fazl");
// hallo("Mausoof");
// hallo("Fazl" , "Mausoof");
 
//Type Declaration
// keterangan.................. 
// class/interface = class/interface;
// self = parameter harus sama dengan class dimana function ini date_create_immutable_from_format;
// array = parameter harus array;
// callable = parameter harus callable;
// bool = parameter harus boolean;
// float = parameter harus floating point;
// int = parameter harus integer number;
// string = parameter harus string;
// interble = parameter harus array atau tipe traversable;
// object = parameter harus sebuah object;
/// ...............
// function sum(int $name,int $last){
//     echo $total = $name +$last;
//     echo "Total $name + $last = $total" . PHP_EOL;
// };

// sum("100", "100");
// sum(800,false);
// sum(true,false);

//variable-lenght argument list
function sumAll(...$values){
    $total = 0;
    foreach($values as $value){
        $total += $value;
    }
    echo "Total " . implode(",", $values) . " = $total" . PHP_EOL;
}

$values = [1,2,3,4,5];

sumAll(1,2,3,4,5);
sumAll(...$values);


?>
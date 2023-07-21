<?php
// Local & Global Scope
// .........................
// Global Scope (variable yang dibuat di luar function[tidak bisa masuk ke function])
$global = "Fazl"; 

function sayName(){
    $local = "Nikelz" . PHP_EOL; // local scope (variable yang di buat di dalam function[hanya bisa di akses di dalam function])

    // echo $global; // error karna undefined (global scope)
    echo $local; // error
}

sayName();
// echo $local; //error karna undefined(local scope )


// Global Keyboard ;
// ..........................
$name = "hamid"; //Global Scope & GLOBAL variable

function sayOnly(){
     global $name ; // Global keyword (mengambil data variabel local scope)
     echo $name . PHP_EOL ; 
     echo "Hallo " . $GLOBALS["name"] . PHP_EOL; // GLOBALS Variable mengambil data global scope
}

sayOnly();

// Static Scope 
// ...........
function increment(){
    static $counter = 1;
    echo "Counter : " . $counter . PHP_EOL;
    $counter++;
}
increment();
increment();
increment();







?>



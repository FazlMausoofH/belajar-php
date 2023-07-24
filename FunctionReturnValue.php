<?php

// 1
function sum(int $first, int $second) : string  {
    $total = $first + $second;
    return $total;
}

$re = sum(10,20);
var_dump($re);

$result = sum(5,195);
var_dump($result);

// 2
function getFinalValue(int $value) {
    if ($value >= 80){
        return "A";
    } elseif ($value >= 70){
        return "B";
    } elseif ($value >= 60){
        return "C";
    } elseif ($value >= 50){
        return "D";
    } else {
        return "E";
    }
    echo "ups" . PHP_EOL;
};

$score = getFinalValue(60);
echo($score);

// ..............................
//Return Type Declarations
// ..............................

// 1
function sam(int $first, int $second) :int {
    $total = $first + $second;
    return $total;
};

$re = sam(false,20);
var_dump($re);
$result = sam(5,195);
var_dump($result);

// 2
function getFinalValues(int $value) : int {
    if ($value >= 80){
        return "A";
    } elseif ($value >= 70){
        return "B";
    } elseif ($value >= 60){
        return "C";
    } elseif ($value >= 50){
        return "D";
    } else {
        return 1;
    }
    echo "ups" . PHP_EOL;
};

$score = getFinalValues(40);
var_dump($score);


?>
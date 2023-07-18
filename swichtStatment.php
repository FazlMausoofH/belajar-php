<?php 

$nilai ="A";

switch($nilai){
    case "A":
        echo "Kamu Nilai A";
        break;
    case "B":
        echo "Kamu Nilai B";
        break;
    case "C":
    case "D":
        echo "Kamu Lulus";
        break;
    default:
    echo "Mungkin kamu salah jurusan";            
}

?>
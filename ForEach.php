<?php 

$names = ["Fazl","Mausoof","Hamid"];

// Menggunakan for //
// for($i = 0;$i < count($names);$i++){
//     echo "Data ke $i = $names[$i]" . PHP_EOL; 
// }


// Menggunakan forEach //
// foreach($names as $ubahVariabel){ // as untuk mengubah nama variabel nya
//     echo "Hello $ubahVariabel" . PHP_EOL; 
// }


// For Each dengan key
$person = [
    "namaDepan" => "Fazl",
    "namaTengah" => "Mausoof",
    "namaAkhir" => "Hamid"
];

foreach($person as $key => $value){
    echo "$key => $value" . PHP_EOL;
}

?>
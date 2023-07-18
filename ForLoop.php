<?php 

// ~init statement akan dieksekusi hanya sekali di awal sebelum perulangan

// ~kondisi akan dilakukan pengecekan dalam setiap perulangan, jika true perulangan akan dilakukan,
// jika false perulangan akan berhenti

// ~post statement akan dieksekusi setiap kali di akhir perulangan

// ~init statement,kondisi dan post statment tidak wajib di isi,jika kondisi tidak di isi,
// berati kondisi selalu bernilai false

//  syntax //
// for(initStatment;kondisi;postStatment){
//     block perulangan
// }

//ver
$number = 1; //init statement

for (; $number <= 5;){ // kondisi
    echo "Hallo World! " . $number . PHP_EOL;
    $number++; //post statment
}

for($number = 10; $number >= 1; $number-- ){
    echo "Nilai " . $number . PHP_EOL;
}    

for($number = 50;$number <= 350;$number++){
    echo "Hallo " . $number . PHP_EOL;
}
?>
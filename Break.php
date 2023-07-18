<?php 

// $nilai = 1;

// while(true){
//     echo "hallo break" . $nilai . PHP_EOL; 
//     $nilai++;

//     if($nilai > 100){
//         continue;
//     }
// }

for($nilai=1;$nilai;$nilai++){
    echo "Data " . $nilai . PHP_EOL;
    if($nilai >= 100){
        break;
    }
}

?>
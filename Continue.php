<?php 

for($nilai = 1; $nilai <= 100;$nilai++){
    if($nilai % 2 == 0){
        continue;
    }
    echo "Data ke-$nilai" . PHP_EOL;
}
?>
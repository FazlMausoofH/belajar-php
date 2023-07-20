<?php

// a:
// echo "hallo world " . PHP_EOL;
// echo "Hallo A" . PHP_EOL;
// echo "Hallo";
// goto a;

while(true){
    echo "hallo break" . $nilai . PHP_EOL; 
    $nilai++;

    if($nilai > 100){
        goto end;
    }
}
end:
echo "Selesai";

?>
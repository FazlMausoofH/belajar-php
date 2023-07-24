<?php

// echo date("l, d-M-Y") . PHP_EOL;
// echo time();
// // echo date("l, d-M-Y",time()-60*60*24*101);
// // echo date("l, d-M-Y", mktime(0,0,0,9,10,2005));
// echo date("l", strtotime("10 sep 2005"));


function salam($waktu,$nama="?"){
    return "Selamat $waktu, $nama";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1><?php echo salam("Malam") ?></h1>
    
</body>
</html>
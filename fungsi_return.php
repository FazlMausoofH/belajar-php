<?php
$arr = ['satu'];
$nama = 'fazl';
function menu(&$arr, &$nama){
    $nama = " samsul ";
    echo $nama;

    // var_dump($arr)  ;
    //memilih bbm 
    // harus mengembalikan kode bbm
    $kode_bbm = 1;
    return $kode_bbm;
}

function math($nilai) {
    // menghitung bbm
    // tidak harus mengembalikan
    // memberikan output echo
}

// $hasil = menu($arr);

// $kuadrat = math($hasil);

echo $nama;
echo menu($arr,$nama);
echo $nama;
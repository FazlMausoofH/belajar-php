<?php 

//Array

//membuat array
//tipe 1
$names = ["Fazl", "Mausoof", "Hamid"];
//tipe2
$values = array(1, 2, 3, 7);

// memanggil seluruh data array (Tamplikan Semua Data)
var_dump($names);

// cari data array spesifik (Tampilkan Data Ke-0)
var_dump($names[0]);

// Mengubah data array (Mengubah data ke-0 jadi budi)
$names[0] = "budi";

// Menghapus Data Array (Menghapus data ke-1)
unset($names[1]);
// var_dump($names);

// Menambahkan Data Baru (Menambahkan data array yaitu Nikelz)
$names[] = "Nikelz";
$names[] = "Joko";
// var_dump($names); 

// Menghitung Jumlah Data
var_dump(count($names));

//kode membuat map
$fazl = array (
   "id" => "10",
   "name" => "Fazl",
   "umur" => 17
);
// var_dump($fazl);
// var_dump($fazl["id"]);

$nikelz = [
    "id_siswa" => 10,
    "nama" => "Fazl",
    "kelas" => 12
];
// var_dump($nikelz["nama"]);

// Array dalam Array
$fazl = array (
    "id" => "10",
    "name" => "Fazl",
    "alamat" => [
        "rt" => 3,
        "rw" => 2
    ]
 );
 var_dump($fazl["alamat"]);
 print_r($fazl["alamat"]);

?>
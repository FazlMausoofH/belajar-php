<?php 

//..........

function valid(){
while(true){
$validasi = readline("Beli BBM? ( Ya / No ) = ");
switch($validasi){
    case "Ya":
		menu();
		math();
		break;
	case "No":
		exit("Ditunggu Belanja Lagi!");
};         
}
}
//..........................
function menu(){
echo "
________________________________
| No | Jensi     | Harga/Liter |
| -- |---------- | ----------- |
| 1  |Pertamax   | 12.500      |
| 2  |Pertalite  | 10.000      |
| 3  |Dexlite    | 13.000      |
| 4  |Solar      | 6.000       |
|______________________________|
 ";
}

//..........

function math(){
	$namaBarang = [
		"1" => "Pertamax",
		"2" => "Pertalite",
		"3" => "Dexlite",
		"4" => "Solar"
	];
	$hargaBarang = [
		"1" => 12_500,
		"2" => 10_000,
		"3" => 13_000,
		"4" => 6_000
	];

	

// Jenis BBM
$jenisBbm = readline("No Jenis BBM : ");
// Bayar BBM 
$bayarBbm = readline("Nominal Belanja : Rp.");
// Liter BBM
$bbm = $bayarBbm / $hargaBarang[$jenisBbm];
// Tunai Rupiah
$tunai = readline("Nominal Rupiah : Rp.");
// Nama Barang
$namaBbm = $namaBarang[$jenisBbm];
// Time
$time = date('l, d-m-Y');
// Tunai
$kembalian = $tunai-$bayarBbm;
echo "
_____________________________________
| Nota                              |
|-----------------------------------|
| Nama Bbm  : $namaBbm              |
| BBM       : $bbm Liter             |
| Tunai     : Rp.$tunai              |
| Bayar     : Rp.$bayarBbm              |
| Kembalian : Rp.$kembalian	            |
| Tanggal   : $time  |
|___________________________________|
";
}
//....................


valid();

$bbm = [
	"nama" => [
		"1" => "Pertamax",
		"2" => "Pertalite",
		"3" => "Dexlite",
		"4" => "Solar"
	],
	"harga" => [
		"1" => 12_500,
		"2" => 10_000,
		"3" => 13_000,
		"4" => 6_000
	],
];


?>

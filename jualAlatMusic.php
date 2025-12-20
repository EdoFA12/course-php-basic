<?php

echo "======ALAT MUSIK STORE======\n";
echo "List Alat Musik : \n";
$alat = ['gitar','piano','drum','biola'];
$harga = [500000,600000,700000,800000];

for ($i = 0; $i < count($alat); $i++){
     echo ($i+1) . ". $alat[$i] - RP. $harga[$i]\n";
}

$pilih = readline("Masukkan Pilihan Alat Musik (1-4) : ");
$jumlahBarang = readline("Masukkan jumlah barang : ");

echo "Anda memilih " . $alat[$pilih-1] . " Sebanyak $jumlahBarang \n";

$subTotal = $harga[$pilih - 1] * $jumlahBarang;

echo "nominal yang perlu di bayar Rp. $subTotal \n";


$nomimalBayar = readline("masukkan Uang anda : ");
if ($nomimalBayar > $subTotal){
     $kembalian =   $nomimalBayar - $subTotal;
     echo "Sisa kembalian anda adalah Rp. $kembalian \nsetelah membeli ". $alat[$pilih -1] . " dengan jumlah $jumlahBarang";
}else{
     echo "Uang anda tidak cukup";
}

echo "\nTerima Kasih Telah Berbelanja di Toko Kami!!";


?>
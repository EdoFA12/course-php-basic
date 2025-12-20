<?php

echo "======ALAT MUSIK STORE======\n";

$tiket = ["Reguler","Premium","VIP","VVIP"];
$harga = [50000,100000,200000,250000];

for ($i=0; $i < count($tiket); $i++) { 
     echo ($i+1).". $tiket[$i] - Rp $harga[$i]\n";
}

$pilihMenu = readline("Masukkan Pilihan Tiket (1-4) : ");
$jumlahBeli = readline("Masukkan Jumlah Beli : ");

echo "Anda memilih tiket ". $tiket[$pilihMenu - 1 ]. " sebanyak $jumlahBeli tiket";

$subtotal = $harga[$pilihMenu - 1 ] * $jumlahBeli;
echo "\nSubtotal Harga : Rp $subtotal \n";

$nominal = readline("Masukkan Nominal Pembayaran : Rp ");

if ($nominal >= $subtotal){
     $kembalian = $nominal - $subtotal;
     echo "Pembayaran Berhasil! Kembalian Anda : Rp $kembalian\n";
}else{
     echo "Uang Anda Tidak Cukup Untuk Melakukan Transaksi\n";
}



echo "\nTerima Kasih Telah Berbelanja di Toko Kami!!";


?>
<?php

echo "======ALAT MUSIK STORE======\n";
echo "List Alat Musik : \n";
$alat = ['gitar','piano','drum','biola'];
$harga = [500000,600000,700000,800000];

for ($i = 0; $i < count($alat); $i++){
     echo ($i+1) . ". $alat[$i] - RP. $harga[$i]\n";
}

$pilihMenu = true;

$listTransaksi = [];


while ($pilihMenu){
     echo "\n";
     $pilihAlat = readline("Masukkan Pilihan Alat Musik (1-4) : "); // pilih barang
     $jumlahBarang = readline("Masukkan jumlah barang : "); // jumlah barang 
     
     $subTotal = $harga[$pilihAlat - 1] * $jumlahBarang; // mengkalikan harga barang dan jumlah


     $itemBaru = [
          "nama_barang" => $alat[$pilihAlat - 1],
          "jumlah_barang" => (int)$jumlahBarang,
          "subTotal" => (int)$subTotal
     ];

     $listTransaksi[] = $itemBaru;


     $pilihUlang = readline("Apakah Ingin Memilih Barang lagi (Y/N) : ");

     if ($pilihUlang == "n"){
          $pilihMenu = false;
     }
}


echo "==================================\n";

$totalBayar = 0;

foreach ($listTransaksi as $item) {
    echo "Barang: " . $item['nama_barang'] . "\n";
    echo "Jumlah: " . $item['jumlah_barang'] . "\n";
    echo "Subtotal: Rp " . number_format($item['subTotal']) . "\n";
    echo "--------------------\n";

     $totalBayar = $totalBayar + $item['subTotal'];
}


echo "Total bayar anda : $totalBayar\n";
echo "========================\n";



$nomimalBayar = readline("masukkan Uang anda : ");
if ($nomimalBayar > $totalBayar){
     foreach ($listTransaksi as $item) {
          echo "Setelah membeli : ";
          echo  $item['nama_barang'] . "\n";

}
     $kembalian =   $nomimalBayar - $totalBayar;
     echo "Sisa kembalian anda adalah Rp. $kembalian";
}else{
     echo "Uang anda tidak cukup";
}

echo "\nTerima Kasih Telah Berbelanja di Toko Kami!!";


?>
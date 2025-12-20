<?php
echo "\n=======RESTO KANG ARI========\n";
echo "LISTMENU: 
1. Nasi Padang \n
2. Nasi Goreng \n
3. Nasi B.J \n";

echo "\nPilih Menu : ";
$opsiMenu = readline();

if ($opsiMenu == 1) {
     echo"anda memilih\nNasi Padang harga : 25.000\n";
     echo "Masukkan Jumlah makanan : ";
     $harga = 25000;
     $jumlah = readline();
     echo "Jumlah makanan : $jumlah \n";
     $total = $harga * $jumlah;
     echo "Nomimal yang perlu anda bayar : $total ";
} elseif ($opsiMenu == 2) {
     echo"anda memilih\nNasi Goreng, harga : 15.000";
}elseif ($opsiMenu == 3){
     echo"anda memilih\nNasi B.j, harga : 10.000";
}else{
     echo"Pilihan anda tidak di temukan";
}

?>
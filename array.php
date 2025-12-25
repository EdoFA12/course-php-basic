<?php


$data_array = [];

$jumlah_input_buah = 3;
$jumlah_buah = 3;



for ($i = 0; $i < $jumlah_input; $i++ ){

     $input_buah = readline("Masukkan Nama Buah : ");
     $input_jumlah = readline("masukkan jumlah buah : ");

     $data_array[] = $input_buah;
     $data_array[] = $input_jumlah;

}


for ($k = 0; $k < count($data_array); $k++ ){
     echo "\nbuah $data_array[$k]";
}




?>
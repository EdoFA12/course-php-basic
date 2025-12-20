<?php

$nama = ["Andi","arif","budi","caca","dodi", "erik","fina","gina","hadi","inti","indah","joko","kiki","lina","mira","nina","opik","pipi","qori","rani"];
$umur = [20, 21, 19, 22, 20, 23, 21, 20, 22, 19, 21, 20, 22, 19, 23, 21, 20, 22, 19, 21];


for ($i = 0; $i < count($nama);  ){
     echo "\n$i.Selamat datang $nama[$i] umur anda $umur[$i] tahun";
     $i++;
}

echo "\nprogram selesai";

?>
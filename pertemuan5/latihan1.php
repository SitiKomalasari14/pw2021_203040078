<?php
/*
Siti Komalasari
203040078
github.com/SitiKomalasari14/pw2021_203040078
Pertemuan 5 - (25 Februari 2021)
Materi pertemuan ke-5 ini mempelajari tentang Array
*/
?>

<?php
// Array
// adalah sebuah variabel yang mampu memiliki  banyak nilai 
// didalam PHP ada 2 cara untuk membuat Array: cara lama, dan cara baru
// nilai yang ada di dalam array disebut elemen
// pisahkan elemen menggunakan , 
// gunakan tanda kutip untuk tipe data String, untuk Int tidak usah
// elemen pada array boleh memiliki tipe data yang berbeda
// pasangan antara key dan value
// key-nya adalah index, yang dimulai dari 0

// cara lama
$hari = array("Senin", "Selasa", "Rabu");
// cara baru 
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "tulisan", false]; 


// Menampilkan Array ke layar
// var_dump() / print_r
// echo tidak bisa mencetak Array
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";

// Menampilkan  1 elemen pada Array
// boleh menggunakan echo
echo $arr1[0];
echo "<br>";
echo $bulan[1];

// Menambahkan elemen baru pada Array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jum'at";
echo "<br>";
var_dump($hari);


?>
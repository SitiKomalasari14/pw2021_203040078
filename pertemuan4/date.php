<?php
/*
Siti Komalasari
203040078
github.com/SitiKomalasari14/pw2021_203040078
Pertemuan 4 - (23 Februari 2021)
Materi pertemuan ke-4 ini mempelajari penggunaan function pada PHP (Date/Time)
*/
?>

<?php
//DATE 
// Untuk menampilkan tanggal dengan format tertentu 
    // echo date("l");
    // echo date("d");
    // echo date("M");
    // echo date("m");

    // echo date("l, d-M-Y"); 

//TIME
// UNIX Timestamp / EPOCH Time
// detik yang sudah berlalu sejak 1 Januari 1970

// echo time(); 
// echo date("l", time()+172800); ------------> menghitung 2 hari kedepan
// echo date("l", time()+60*60*24*100);  ------------> menghitung 100 hari kedepan 
// echo date("d M Y", time()-60*60*24*100); -------------- 100 hari kebelakang

// MKTIME
// membuat detik sendiri 
// mktime (0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun

// echo mktime(0,0,0,7,14,2002);
// echo date("l", mktime(0,0,0,7,14,2002));

// strtotime
// kebalikan dari mktime

// echo strtotime("14 jul 2002");
// echo date("l", strtotime("14 jul 2002"));

/* function yang sering dipakai pada seri PHP 
yang berhubungna dengan String:
1. strlen() = menghitung panjang sebuah String
2. strcmp() = untuk membandingkan 2 buah String 
3. explode() = memecah sebuah String menjadi Array 
4. htmlspecialchars() = function khusus untuk menjaga kita dari hacker 
Utility:
1. var_dump() = untuk mencetak sebuah objek, array
2. isset() = utk mengecek apakah sebuah variabel sudah pernah dibikin atau belum akan menampilkan boolean
3. empty() = utk mengecek apakah variabel yang kita buat itu ada isinya atau tidak 
4. die() = untuk memberhentikan program kita 
5. sleep() = utk memberhentikan sementara
*/ 

?>

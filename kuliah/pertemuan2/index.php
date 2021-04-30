<?php
/*
Siti Komalasari
203040078
github.com/SitiKomalasari14/pw2021_203040078
Pertemuan 2 - (10 Februari 2021)
Materi pertemuan kedua ini menjelaskan tentang Sintaks PHP
*/
?>

<?php
// Standar Output
// echo, print
// print_r
// var_dump  

echo "Siti Komalasari";
print_r("Siti Komalasari");
var_dump("Siti Komalasari");

// untuk menuliskan echo bisa menuliskannya dengan " (kutip dua) atau ' (kutip satu)
// tetapi jika menuliskan kode yang didalamnya terdapat ' lebih baik memakai " karena tidak akan terbaca
// echo 'Jum'at'; <---- ini akan error, karena PHP tidak tahu apa itu at'
echo 1;
echo true;
echo false;
echo "Jum'at";


// Penulisan Sintaks PHP
// 1. PHP di dalam HTML
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Belajar PHP</title>
    </head>
    <body>
        <h1>Halo, Selamat datang <?php echo "Mala"; ?></h1>
        <p> <?php echo "ini adalah paragraf"; ?> </p>
    </body>
    </html>

<?php
// 2. HTML di dalam PHP
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Belajar PHP</title>
    </head>
    <body>
        <?php 
            echo "<h1>Halo, Selamat datang Mala</h1>"
        ?>
    </body>
    </html>

<?php
// Variabel dan Tipe Data
// VARIABEL
// Variabel ditulis dengan $ (dollar)
// Variabel tidak boleh diawali oleh angka, tapi boleh mengandung angka
// tidak boleh menggunakan spasi, jika ada pakai _
?>
<?php
$nama = "Siti Komalasari";
$nama = "Siti Komalasari";
echo "Halo, nama saya $nama";

// Operator
// ARITMATIKA
// + - * / %
echo 1 + 1;
$x = 10;
$y = 20;
echo $x * $y;
echo 10/5;
echo 5-2; 
echo 10*10;

// Operator PENGGABUNNG STRING  / concatenation / concat
// operatornya yaitu . 
$nama_depan = "Siti";
$nama_belakang = "Komalasari";
echo $nama_depan ." " . $nama_belakang;

// ASSIGMENT
// adalah operator penugasan 
// =, +=, -=, *=, %=, /=, .= 
$x = 1;
$x += 5; 
echo $x; 
$nama = "Siti";
$nama .= " ";
$nama .= "Komalasari";
echo $nama;


// PERBANDINGAN 
// <, >, <=, >=, ==, !=
var_dump(1 < 5); // akann menghasilkan boolean true
var_dump(5 <= 5);
var_dump(90 > 100);

//IDENTITAS
// ===, !==
var_dump(1 === "1");

//LOGIKA
// &&, ||, !
// $x = 30;
var_dump($x < 20 && $x % 2 == 0 ); // $x % 2 == 0 <-- utk bilangan genap
var_dump($x < 20 || $x % 2 == 0 );
// jika memakai ||, dan salah satunya benar maka outputnya akan boolean true

?>
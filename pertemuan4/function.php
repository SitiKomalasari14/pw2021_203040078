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
/* ketika ingin membuat User-defined Function (function sendiri) ada beberapa hal yang harus diperhatikan:
1. functionnya harus kita definisikan dulu 
*/

function salam($waktu = "Datang", $nama = "Admin") {
    return "Selamat $waktu, $nama!";
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan Function</title>
</head>
<body>
    <h1><?php echo salam("Pagi", "Mala"); ?></h1>
</body>
</html>
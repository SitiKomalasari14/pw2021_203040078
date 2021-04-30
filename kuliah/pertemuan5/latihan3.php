<?php
/*
Siti Komalasari
203040078
github.com/SitiKomalasari14/pw2021_203040078
Pertemuan 5 - (25 Februari 2021)
Materi pertemuan ke-5 ini mempelajari tentang Array numerik
*/
?>
<?php
// Untuk menambahkan data mahasiswa, kita membuat Array multi dimensi 
// Array multi dimensi = Array di dalam Array 
// Array Numerik = Array yang index nya angka
?>


<?php
$mahasiswa = [
    ["Siti Komalasari", "203040078", 
    "Teknik Informatika", "203040078@mail.unpas.ac.id"],
    ["Siti Komala", "203040079", 
    "Teknik Informatika", "sitikomalasari1417@gmail.com"],
    ["Mala", "203040080", 
    "Teknik Informatika", "sitikomalasari1407@gmail.com"]
]
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    
<h1>Daftar Mahasiswa</h1>

<?php foreach( $mahasiswa as $mhs) : ?>
<ul>
    <li>Nama: <?= $mhs[0]; ?></li>
    <li>NRP: <?= $mhs[1]; ?></li>
    <li>Jurusan: <?= $mhs[2]; ?></li>
    <li>Email: <?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>


</body>
</html>
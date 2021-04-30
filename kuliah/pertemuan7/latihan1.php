<?php
/*
Siti Komalasari
203040078
github.com/SitiKomalasari14/pw2021_203040078
Pertemuan 7 - (19 Maret 2021)
Materi pertemuan 7 ini menjelaskan tentang Metode GET AND POST
*/
?>
<?php
// Variable Scope / lingkup variabel
// Varibel lokal adalah variabel yang hanya untuk function itu saja
// $x = 10;
// function tampilX() {
//     global $x; // Variabel global, mencari keluar
//     echo $x;
// }
// tampilX();

// Variabel Superglobals = variabel milik PHP yang bisa kita akses dimana pun kapanpun di halaman kita
// Macam - macam variabel Superglobals:
// $_GET, $_POST, $_REQUEST, $_SESSION, $_COOKIE, $_SERVER,  $_ENV
// Ke-7 Variabel Superglobals adalah ARRAY Associative

// $_GET
// Metode Request GET adalah metode pengiriman data melalui URL dan data tersebut bisa dotangkap oleh Variabel Superglobals $_GET
$mahasiswa = [
    [
        "nrp" => "203040078",
        "nama" => "Siti Komalasari",
        "email" => "203040078@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "mala.jpg"
    ],
    [
        "nama" => "Joanne",
        "nrp" => "20304090",
        "email" => "joanne14@mail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "joanne.jpg"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
<ul>
    <?php foreach( $mahasiswa as $mhs ) : ?>
        <li> 
        <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>
        &nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>
        &jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>">
        <?= $mhs["nama"]; ?></a>
	</li>
    <?php endforeach; ?>
</ul>

</body>
</html>
</body>
</html> 
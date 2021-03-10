<?php
/*
Siti Komalasari
203040078
github.com/SitiKomalasari14/pw2021_203040078
Pertemuan 6 - (10 Maret 2021)
Materi pertemuan ke-6 ini mempelajari tentang ARRAY Associative
*/
?>
<?php 
// $mahasiswa = [
//     ["Siti Komalasari", "203040078", "203040078@mail.unpas.ac.id", "Teknik Informatika"],
//     ["Joanne", "20304090", "joanne14@mail.com", "Teknik Informatika"]
// ];

// ARRAY Associative
// definisisnya sama spt ARRAY Numerik, kecuali
//pada ARRAY Associative key-nya adalah String yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Siti Komalasari",
        "nrp" => "203040078",
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
// echo $mahasiswa[1]["nama"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"]; ?>">
        </li>
        <li>Nama : <?php echo $mhs["nama"]; ?></li>
        <li>NRP : <?php echo $mhs["nrp"]; ?></li>
        <li>Email : <?php echo $mhs["email"]; ?></li>
        <li>Jurusan : <?php echo $mhs["jurusan"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>

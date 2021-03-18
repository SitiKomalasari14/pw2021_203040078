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
// cek apakah tidak ada data di $_GET
if ( !isset($_GET["nama"]) || 
    !isset($_GET["nrp"]) ||
    !isset($_GET["email"]) ||
    !isset($_GET["jurusan"]) ||
    !isset($_GET["gambar"] )) {
    // redirect
    header("Location: latihan1.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Detail Mahasiswa</title>
</head>
<body>
    <ul>
    <li><img src="img/<?= $_GET["gambar"]; ?>"> </li>
    <li><?= $_GET["nama"]; ?></li>
    <li><?= $_GET["nrp"]; ?></li>
    <li><?= $_GET["email"]; ?></li>
    <li><?= $_GET["jurusan"]; ?></li>

    </ul>

<a href="latihan1.php">Kembali ke Daftar Mahasiswa</a>
</body>
</html>
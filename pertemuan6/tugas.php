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
$buku = [
    [
        "judul" => "Hujan",
        "Penulis" => "Tere Liye",
        "Tahun Terbit" => "2016",
        "Penerbit" => "Gramedia Pustaka Utama",
        "Halaman" => "320",
        "gambar" => "hujan.jpg"
    ],
    [
        "judul" => "Pulang",
        "Penulis" => "Tere Liye",
        "Tahun Terbit" => "2015",
        "Penerbit" => "Republika",
        "Halaman" => "40",
        "gambar" => "pulang.jpg"
    ],
    [
        "judul" => "Burlian",
        "Penulis" => "Tere Liye",
        "Tahun Terbit" => "2009",
        "Penerbit" => "Republika",
        "Halaman" => "339",
        "gambar" => "burlian.jpg"
    ],
    [
        "judul" => "Bumi",
        "Penulis" => "Tere Liye",
        "Tahun Terbit" => "2014",
        "Penerbit" => "Gramedia Pustaka Utama",
        "Halaman" => "440",
        "gambar" => "bumi.jpg"
    ],
    [
        "judul" => "Amelia",
        "Penulis" => "Tere Liye",
        "Tahun Terbit" => "2013",
        "Penerbit" => "Republika",
        "Halaman" => "398",
        "gambar" => "amelia.jpg"
    ]
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Novel</title>
</head>
<body>
    <h1>Novel</h1>

    <?php foreach( $buku as $bk ) : ?>
    <ul>
        <li>
            <img src="img/<?= $bk["gambar"]; ?>">
        </li>
        <li>Judul : <?php echo $bk["judul"]; ?></li>
        <li>Penulis : <?php echo $bk["Penulis"]; ?></li>
        <li>Tahun Terbit : <?php echo $bk["Tahun Terbit"]; ?></li>
        <li>Penerbit : <?php echo $bk["Penerbit"]; ?></li>
        <li>Halaman : <?php echo $bk["Halaman"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>
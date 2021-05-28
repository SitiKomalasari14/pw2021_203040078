<?php
/*
Siti Komalasari
203040078
SHIFT Jum'at 10:00 - 11:00
B - Informatika
*/
?>
<?php
// mengecek apakah ada id yang dikirimkan
// jika tidak maka akan dikembalikan ke halaman index.php
if (!isset($_GET['id_buku'])) {
    header("Location: ../index.php");
    exit;
}
require 'functions.php';

// mengambil id dari url 
$id = $_GET['id_buku'];

//melakukan query dengan parameter id yang diambil dari url
$buku = query("SELECT * FROM buku WHERE id_buku = $id")[0];

?>
<!Doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />

    <!--font-google-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap" rel="stylesheet">

    <!-- css style -->
    <link rel="stylesheet" href="../css/style2.css">
    <title>BOOK_ID</title>
    <style>
        @font-face {
            font-family: "Wash Your Hand";
            src: url('../assets/font/wash_your_hand/Wash\ Your\ Hand.ttf');
        }

        .container h3 {
            font-family: "Wash Your Hand";
        }

        body {
            background-image: url('../assets/img/bg3.jpg');
            background-size: cover;
            font-family: 'Quicksand', sans-serif;
        }
    </style>
</head>

<body>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <div class="container">
        <h3 class="center">Detail Produk</h3>
        <div class="row">
            <div class="col m6 s12">
                <div class="card centered">
                    <div class="card-image">
                        <img src="../assets/img/<?= $buku["gambar"]; ?>" width="250">
                        <br>
                        <span class="card-title"><?= $buku["judul"]; ?></span>
                        <div class="card-content">
                            <p>Penulis: <?= $buku["pengarang"]; ?></p>
                            <p>Harga: <?= $buku["harga"]; ?></p>
                            <p>Kategori: <?= $buku["kategori"]; ?></p>
                        </div>
                        <div class="card-action">
                            <a href="../index.php">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col m6 s12">
                <div class="card grey lighten-1">
                    <div class="card-content">
                        <span class="card-title center"><?= $buku["judul"]; ?></span>
                        <p>Deskripsi: </p>
                        <p><?= $buku["sinopsis"]; ?></p>
                    </div>

                </div>

            </div>
        </div>
</body>
</table>
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
if (!isset($_GET['id_buku']) ) {
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
        <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
        <!-- css style -->
        <link rel="stylesheet" href="../css/style2.css">
        <title>BOOK_ID</title>
    </head>
  <body>
  <script type="text/javascript" src="js/materialize.min.js"></script>
    <div class="container">
        <div class="row">
            <div class="col s12 m7">
                <div class="card centered">
                    <div class="card-image">
                    <img src="../assets/img/<?= $buku["gambar"]; ?>">
                    <br>
                    <span class="card-title"><?= $buku["judul"]; ?></span>
                <div class="card-content">
                    <p><?= $buku["pengarang"]; ?></p>
                    <p><?= $buku["sinopsis"]; ?></p>
                    <p><?= $buku["harga"]; ?></p>
                    <p><?= $buku["kategori"]; ?></p>
                </div>
                <div class="card-action">
                <a href="../index.php">Kembali</a>
                </div>
            </div>
        </div>
    </div>
    </div>
 </body>
</table>
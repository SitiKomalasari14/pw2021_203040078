<?php
/*
Siti Komalasari
203040078
SHIFT Jum'at 10:00 - 11:00
B - Informatika
*/
?>
<?php
session_start();

if(!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

$id = $_GET['id_buku'];
$bk = query("SELECT * FROM buku WHERE id_buku = $id")[0];

if(isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                alert('Data BERHASIL diubah!');
                document.location.href = 'admin.php';
            </script>";  
    } else {
        echo "<script>
                alert('Data GAGAL diubah!');
                document.location.href = 'admin.php';
            </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
    <!-- css style -->
    <link rel="stylesheet" href="../css/style.css">
    <title>Laman Ubah Data BOOK_ID</title>
    <style>
        body {
            background-color: #e4d3cf;
        }
    </style>
</head>
<body>
<script type="text/javascript" src="../js/materialize.min.js"></script> 
<div class="container">
<h4>Laman Ubah Data BOOK_ID</h4>
<form action="" method="post">

    <input type="hidden" name="id_buku" value="<?= $bk['id_buku']; ?>">
    
    <div class="card-panel">
        <div class="input-field">
            <input type="text" name="judul" id="judul" required value="<?= $bk['judul']; ?>" class="validate">
            <label for="judul">Judul</label>
        </div>
        <div class="input-field">
            <input type="text" name="gambar" id="gambar" required value="<?= $bk['gambar']; ?>" class="validate">
            <label for="gambar">Gambar</label>
        </div>
        <div class="input-field">
            <input type="text" name="pengarang" id="pengarang" required value="<?= $bk['pengarang']; ?>"class="validate">
            <label for="pengarang">Pengarang</label>
        </div>
        <div class="input-field">
            <input type="text" name="sinopsis" id="sinopsis" required value="<?= $bk['sinopsis']; ?>"class="validate">
            <label for="sinopsis">Sinopsis</label>
        </div>
        <div class="input-field">
            <input type="text" name="harga" id="harga" required value="<?= $bk['harga']; ?>"class="validate">
            <label for="harga">Harga</label>
        </div>
        <div class="input-field">
            <input type="text" name="kategori" id="kategori" required value="<?= $bk['kategori']; ?>"class="validate">
            <label for="kategori">Kategori</label>
        </div>
        <button type="submit" name="ubah"class="waves-effect waves-light brown lighten-2 btn-small">Ubah Data!</button>
        <a href="../index.php"class="waves-effect waves-light brown lighten-2 btn-small">Kembali</a>
    </div>
</form>
</div>


</body>
</html>
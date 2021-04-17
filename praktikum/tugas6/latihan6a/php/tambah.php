<?php
/*
Siti Komalasari
203040078
SHIFT Jum'at 10:00 - 11:00
B - Informatika
*/
?>
<?php
require 'functions.php';

if(isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                alert('Data BERHASIL ditambahkan!');
                document.location.href = 'admin.php';
            </script>";
    } else {
        echo "<script>
                alert('Data GAGAL ditambahkan!');
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
    <title>Laman Tambah Data BOOK_ID</title>
    <style>
        body {
            background-color: #e4d3cf;
        }


    </style>
</head>
<body>
<script type="text/javascript" src="../js/materialize.min.js"></script> 
<div class="container">
<h4>Laman Tambah Data BOOK_ID</h4>
<form action="" method="post">
    <div class="card-panel">
        <div class="input-field">
            <input type="text" name="judul" id="judul" required class="validate">
            <label for="judul">Judul</label>
        </div>
        <div class="input-field">
            <input type="text" name="gambar" id="gambar" required class="validate">
            <label for="gambar">Gambar</label>
        </div>
        <div class="input-field">
            <input type="text" name="pengarang" id="pengarang" required class="validate">
            <label for="pengarang">Pengarang</label>
        </div>
        <div class="input-field">
            <input type="text" name="sinopsis" id="sinopsis" required class="validate">
            <label for="sinopsis">Sinopsis</label>
        </div>
        <div class="input-field">
            <input type="text" name="harga" id="harga" required class="validate">
            <label for="harga">Harga</label>
        </div>
        <div class="input-field">
            <input type="text" name="kategori" id="kategori" required class="validate">
            <label for="kategori">Kategori</label>
        </div>
        <button type="submit" name="tambah"class="waves-effect waves-light brown lighten-2 btn-small">Tambah Data!</button>
        <a href="../index.php"class="waves-effect waves-light brown lighten-2 btn-small">Kembali</a>
    </div>
</form>
</div>


</body>
</html>
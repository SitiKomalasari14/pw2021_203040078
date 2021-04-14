<?php
/*
Siti Komalasari
203040078
SHIFT Jum'at 10:00 - 11:00
B - Informatika
*/
?>
<?php 
// menguhubungkan dengan file php lainnya
require 'functions.php';

//melakukan query
$buku = query("SELECT * FROM BUKU");
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
        <link rel="stylesheet" href="../css/style.css">
        <title>BOOK_ID</title>
    </head>
  <body>
  <script type="text/javascript" src="../js/materialize.min.js"></script> 
  <div class="container">
  <h3>BOOK_ID</h3>
     <table class="highlight - centered brown lighten-4">
        <thead>
            <tr class=" brown darken-1">
            <th>No</th>
            <th>Judul</th>
            <th>Gambar</th> 
            <th>Pengarang</th>
            <th>Sinopsis</th>
            <th>Harga</th>
            <th>Kategori</th>
            <th>#</th>
            <th>Opsi</th>
            </tr>
        </thead>
    <tbody>
        <?php $i = 1; ?>
        <?php foreach($buku as $bk) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $bk["judul"]; ?></td>
            <td>
                <img src="../assets/img/<?= $bk["gambar"]; ?>">
            </td>
            <td><?= $bk["pengarang"]; ?></td>
            <td><?= $bk["sinopsis"]; ?></td>
            <td><?= $bk["harga"]; ?></td>
            <td><?= $bk["kategori"];?> </td>
            <td>
                <a href="../php/detail.php?id_buku=<?= $bk['id_buku']?>"<?= $bk["judul"]?>>Lihat Produk</a>
            </td>
            <td>
                <a href="" class="waves-effect waves-light brown lighten-2 btn-small">EDIT</a></a>
                <a href="" class="waves-effect waves-light red darken-3 btn-small">DELETE</a></a>
            </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </tbody>
  </div>
 </body>
</table>
</html>
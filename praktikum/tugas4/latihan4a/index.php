<?php
/*
Siti Komalasari
203040078
SHIFT Jum'at 10:00 - 11:00
B - Informatika
*/
?>
<?php
// melakukan koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "pw_tubes_203040078");

//mengambil data dari database
$result = mysqli_query($conn, "SELECT *  FROM buku ");
if (!$result) {
    echo mysqli_error($conn);
}
?>
<!Doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <!-- css style -->
    <link rel="stylesheet" href="css/style2.css">
    <title>BOOK_ID</title>
</head>

<body>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <div class="container">
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
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php while ($buku = mysqli_fetch_assoc($result)) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td><?= $buku["judul"]; ?></td>
                        <td>
                            <img src="assets/img/<?= $buku["gambar"]; ?>">
                        </td>
                        <td><?= $buku["pengarang"]; ?></td>
                        <td><?= $buku["sinopsis"]; ?></td>
                        <td><?= $buku["harga"]; ?></td>
                        <td><?= $buku["kategori"]; ?> </td>
                    </tr>
                    <?php $i++; ?>
                <?php endwhile; ?>
            </tbody>
    </div>
</body>
</table>

</html>
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

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

// menguhubungkan dengan file php lainnya
require 'functions.php';

//melakukan query
$buku = query("SELECT * FROM BUKU");

// jika tombol di klik
if (isset($_GET["cari"])) {
    $buku = cari($_GET["keyword"]);
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
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />

    <!--font-google-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap" rel="stylesheet">


    <!-- css style -->
    <link rel="stylesheet" href="../css/style22.css">
    <title>BOOK_ID</title>
</head>

<body id="home scrollspy">
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <!-- Nav Bar -->
    <div class="navbar-fixed">
        <nav class="grey darken-3" role="navigation">
            <div class="nav-wrapper">
                <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <a id="logo-container" href="#" class="brand-logo logo">
                    <i class="material-icons">bookmarks</i>BOOK_ID</a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#produk">Daftar Produk</a></li>
                    <li><a href="tambah.php">Tambah Buku</a></li>
                    <li>
                        <a href="logout.php">
                            <button type="" class="waves-effect waves-light btn-large red darken-2">Logout</button>
                        </a>
                    </li>
                </ul>
            </div>
    </div>
    </nav>

    <!--   Side Nav   -->
    <ul class="sidenav" id="mobile-nav">
        <li><a href="#home"><i class="fas fa-home"></i>HOME</a></li>
        <li><a href="#produk"><i class="fas fa-book"></i>DAFTAR PRODUCT</a></li>
        <li><a href="tambah.php"><i class="material-icons">add</i>TAMBAH BUKU</a></li>
        <li>
            <a href="logout.php">
                <button type="" class="waves-effect waves-light btn-small red darken-2"><i class="material-icons right">exit_to_app</i>Logout</button>
            </a>
        </li>
    </ul>
    <!-- Akhir Side Nav -->
    <!-- Akhir Nav -->

    <!-- Slider -->
    <section class="slider">
        <ul class="slides">
            <li>
                <img src="../assets/img/bg9.jpg">
                <div class="caption left-align">
                    <h1>Welcome To BOOK_ID Admin Page!</h1>
                </div>
            </li>
            <li>
                <img src="../assets/img/bk6.jpg">
                <div class="caption center-align">
                    <h3>This is Admin Page :)</h3>
                    <h5 class="light grey-text text-lighten-3">Thank You for Joining Us!</h5>
                </div>
            </li>
        </ul>
    </section>
    <!-- Akhir Slider -->
    <section id="produk" class="produk scrollspy">
        <div class="container">
            <h3>Daftar Produk</h3>

            <form action="" method="GET">
                <input type="text" name="keyword" autofocus placeholder="Cari Buku..." autocomplete="off" class="keyword">
                <button id="waves-effect waves-light btn-small  blue darken-2" type="submit" name="cari" class="tombol-cari">Search</button>
            </form>

            <div class="ajax">
                <table class="highlight - centered grey lighten-2">
                    <thead>
                        <tr class="grey darken-1">
                            <th>No</th>
                            <th>Judul</th>
                            <th>Gambar</th>
                            <th>Pengarang</th>
                            <th>Deskripsi</th>
                            <th>Harga</th>
                            <th>Kategori</th>
                            <th>#</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (empty($buku)) : ?>
                            <tr>
                                <td colspan="7">
                                    <h1>Data tidak ditemukan</h1>
                                </td>
                            </tr>
                        <?php else : ?>
                            <?php $i = 1; ?>
                            <?php foreach ($buku as $bk) : ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><?= $bk["judul"]; ?></td>
                                    <td>
                                        <img src="../assets/img/<?= $bk["gambar"]; ?>">
                                    </td>
                                    <td><?= $bk["pengarang"]; ?></td>
                                    <td><?= $bk["sinopsis"]; ?></td>
                                    <td><?= $bk["harga"]; ?></td>
                                    <td><?= $bk["kategori"]; ?> </td>
                                    <td>
                                        <a href="../php/detail.php?id_buku=<?= $bk['id_buku'] ?>" <?= $bk["judul"] ?>>Lihat Produk</a>
                                    </td>
                                    <td>
                                        <a href="ubah.php?id_buku=<?= $bk['id_buku'] ?>" class="waves-effect waves-light green darken-3 btn-small">EDIT</a></a>
                                        <a href="hapus.php?id_buku=<?= $bk['id_buku'] ?>" onclick="return confirm('Hapus Data???')" class="waves-effect waves-light  red accent-4 btn-small">DELETE</a></a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </section>

    <!--  Scripts-->

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/41c4d5f501.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="../js/materialize.js"></script>
    <script src="../js/script.js"></script>

    <script>
        (function($) {
            $(function() {
                const sideNav = document.querySelectorAll('.sidenav');
                M.Sidenav.init(sideNav);

                // Slider
                $('.slider').slider({
                    fullWidth: true,
                    indicators: false,
                    transition: 600,
                    interval: 3000,
                    height: 300
                });

                //Scrollspy
                const scroll = document.querySelectorAll('.scrollspy');
                M.ScrollSpy.init(scroll, {
                    scrollOffset: 50
                });
            });

        })(jQuery);
    </script>
</body>

</html>
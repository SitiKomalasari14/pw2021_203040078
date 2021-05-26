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

require 'functions.php';

if (isset($_POST['tambah'])) {
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
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />


    <!--font-google-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap" rel="stylesheet">

    <!-- css style -->
    <link rel="stylesheet" href="../css/style.css">
    <title>Laman Tambah Data BOOK_ID</title>
    <style>
        @font-face {
            font-family: "Wash Your Hand";
            src: url('../assets/font/wash_your_hand/Wash\ Your\ Hand.ttf');
        }

        @font-face {
            font-family: "Hug Me Tight";
            src: url('../assets/font/hug_me_tight/Hug\ Me\ Tight.ttf');
        }

        body {
            background-image: url('../assets/img/bk2.jpg');
            background-size: cover;
            font-family: "Hug Me Tight";
            background-position: center;
        }

        .btn {
            font-family: 'Quicksand', sans-serif;
        }

        h3 {
            font-family: "Wash Your Hand";
        }

        label {
            font-size: 16px;
            color: white;
        }

        .card {
            background: rgba(0, 0, 0, .7);
            margin-top: 50px;
        }

        input {
            color: white;
        }
    </style>
</head>

<body>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <div class="container">
        <div class="row">
            <div class="col s12 l9 offset-l1">
                <div class="card">
                    <div class="card-action blue-grey lighten-2 center">
                        <h3>Halaman Ubah Data BOOK_ID</h3>
                    </div>
                    <div class="card-content">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-field">
                                <label for="judul">Judul
                                    <input type="text" name="judul" id="judul" required class="validate">
                                </label>
                            </div><br>
                            <div class="form-field">
                                <label for="gambar">Gambar
                                    <input type="file" name="gambar" class="gambar" onchange="previewImage()">
                                </label>
                                <img src="../assets/img/nophoto.jpg" width="120" style="display: block;" class="img-preview">
                            </div><br>
                            <div class="form-field">
                                <label for="pengarang">Pengarang
                                    <input type="text" name="pengarang" id="pengarang" required class="validate">
                                </label>
                            </div><br>
                            <div class="form-field">
                                <label for="sinopsis">Deskripsi
                                    <input type="text" name="sinopsis" id="sinopsis" required class="validate">
                                </label>
                            </div><br>
                            <div class="form-field">
                                <label for="harga">Harga
                                    <input type="text" name="harga" id="harga" required class="validate">
                                </label>
                            </div><br>
                            <div class="form-field">
                                <label for="kategori">Kategori
                                    <input type="text" name="kategori" id="kategori" required class="validate">
                                </label>
                            </div><br>

                            <button type="submit" name="tambah" class="waves-effect waves-light red darken-2 btn-large" style="font-family: Hug Me Tight;">Tambah Data!</button>
                            <a href="admin.php" class="waves-effect waves-light green darken-2 btn-large">Kembali</a>

                        </form>

                    </div>
                </div>
            </div>
        </div>
        <script src="../js/script.js"></script>
</body>

</html>
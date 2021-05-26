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

if (isset($_POST['register'])) {

    if (registrasi($_POST) > 0) {
        echo "<script>
                alert('Registrasi BERHASIL');
                document.location.href = 'login.php';
            </script>";
    } else {
        echo "<script>
                alert('Registrasi GAGAL');
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
    <link rel="stylesheet" href="../css/stylee2.css">
    <title>Registrasi BOOK_ID</title>
    <style>
        @font-face {
            font-family: "Wash Your Hand";
            src: url('../assets/font/wash_your_hand/Wash\ Your\ Hand.ttf');
        }

        body {
            background-image: url('../assets/img/bk1.jpg');
            background-size: cover;
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
            background: rgba(0, 0, 0, .8);
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
            <div class="card">
                <div class="card-action brown darken center">
                    <h3>Halaman Registrasi Book ID</h3>
                </div>
                <div class="card-content">
                    <form action="" method="post">
                        <div class="form-field">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" autofocus autocomplete="off" required>
                        </div><br>

                        <div class="form-field">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" required>
                        </div><br>

                        <div class="form-field">
                            <div class="row">
                                <button type="submit" name="register" class="waves-effect waves-light blue darken-4 btn-large right">Register</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




</body>

</html>
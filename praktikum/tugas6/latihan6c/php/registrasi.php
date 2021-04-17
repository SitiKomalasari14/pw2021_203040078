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

if(isset($_POST['register'])) {

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
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
    <!-- css style -->
    <link rel="stylesheet" href="../css/stylee2.css">
    <title>Registrasi BOOK_ID</title>
    <style>
        body {
            background-color: #e4d3cf;
        }
        h3 {
            padding-left: 15%;
            padding-bottom: 35px;
        }
        form {
            width: 50%;
            height: 90%;
            padding-left: 15%;
        }
    </style>
</head>
<body>
<h3>Registrasi BOOK_ID</h3>
<script type="text/javascript" src="../js/materialize.min.js"></script> 
    <form action="" method="post">
        <div class="card-panel ">
            <tr>
                <td><label for="username">Username</label></td>
                <td>:</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td><label for="password">Password</label></td>
                <td>:</td>
                <td><input type="password" name="password"></td>
            </tr>
        </div>
        <button type="submit" name=" register" class="waves-effect waves-light btn-small blue darken-2">REGISTER</button>
    </form>
</body>
</html>
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
require 'functions.php';

// cek cookie
if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
  $username = $_COOKIE['username'];
  $hash = $_COOKIE['hash'];

  // ambil username berdasarkan id 
  $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
  $row = mysqli_fetch_assoc($result);

  // cek cookie dan username
  if ($hash === hash('sha256', $row['id'], false)) {
    $_SESSION['username'] = $row['username'];
    header("Location: admin.php");
  }
}

// melakukan pengecekan apakah user sudah melakukan Login jika sudah redirect ke halaman admin
if (isset($_SESSION['username'])) {
  header("Location: admin.php");
  exit;
}
// login
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
  // mencocokan USERNAME dan PASSWORD
  if (mysqli_num_rows($cek_user) > 0) {
    $row = mysqli_fetch_assoc($cek_user);
    if (password_verify($password, $row['password'])) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['hash'] = hash('sha256', $row['id'], false);

      //jika remember me dicentang
      if (isset($_POST['remember'])) {
        setcookie('username', $row['username'], time() + 60 * 60 * 24);
        $hash = hash('sha256', $row['id']);
        setcookie('hash', $hash, time() + 60 * 60 * 24);
      }

      if (hash('sha256', $row['id']) == $_SESSION['hash']) {
        header("Location: admin.php");
        die;
      }
    }
  }
  $error = true;
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
  <title>Login</title>
  <style>
    @font-face {
      font-family: "Wash Your Hand";
      src: url('../assets/font/wash_your_hand/Wash\ Your\ Hand.ttf');
    }

    body {
      background-image: url('../assets/img/slider5.jpg');
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
      background: rgba(0, 0, 0, .5);
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
          <h3>Halaman Login Book ID</h3>
        </div>
        <div class="card-content">
          <form action="" method="POST">
            <?php if (isset($error)) : ?>
              <p style="color: red; font-style: italic;">Username atau Password SALAH</p>
            <?php endif; ?>

            <div class="form-field">
              <label for="username">Username</label>
              <input type="text" name="username" id="username" autofocus autocomplete="off" required>
            </div><br>

            <div class="form-field">
              <label for="password">Password</label>
              <input type="password" name="password" id="password" required>
            </div><br>

            <div class="form-field">
              <label>
                <input id="indeterminate-checkbox remember" type="checkbox" name="remember" value="remember" /><span>Remember me</span>
              </label>
            </div><br>

            <div class="form-field">
              <button type="submit" name="submit" class="waves-effect waves-light blue darken-2 btn-large right" style="font-family: 'Quicksand', sans-serif;">Login</button>
              <div class="row">
                <div class="col s12 center">
                  <p class="white-text">Belum Punya Akun ? Registrasi <a href="registrasi.php">disini</a></p>
                </div>
              </div>
            </div>
        </div>

        </form>

      </div>
    </div>
  </div>


</body>

</html>
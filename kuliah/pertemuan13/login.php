<?php
/*
Siti Komalasari
203040078
github.com/SitiKomalasari14/pw2021_203040078
Pertemuan 13 - (11 MEI 2021)
Materi pertemuan kali ini mempelajari mengenai LIVE SEARCHING AJAX dan Upload Gambar
*/
?>
<?php
session_start();

if (isset($_SESSION['login'])) {
  header("Location: index.php");
  exit;
}

require 'functions.php';

// ketika tombol login ditekan
if (isset($_POST['login'])) {
  $login = login($_POST);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>

<body>
  <h3>Form Login</h3>
  <?php if (isset($login['error'])) : ?>
    <p style="color: red; font-style: italic;"><?= $login['pesan']; ?></p>
  <?php endif; ?>
  <form action="" method="POST">
    <ul>
      <li>
        <label>
          Username :
          <input type="text" name="username" autofocus autocomplete="off" required>
        </label>
      </li>
      <br>
      <li>
        <label>
          Password :
          <input type="password" name="password" required>
        </label>
      </li>
      <br>
      <li>
        <button type="submit" name="login">Login</button>
      </li>
      <br>
      <li>
        <a href="registrasi.php">Tambah User baru</a>
      </li>
    </ul>
  </form>
</body>

</html>
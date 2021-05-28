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
require 'functions.php';

if (isset($_POST['registrasi'])) {
  if (registrasi($_POST) > 0) {
    echo "<script>
    alert('User baru BERHASIL ditambahkan. Silahkan login!');
    document.location.href = 'login.php';
    </script>";
  } else {
    echo 'User GAGAL ditambahkan!';
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrasi</title>
</head>

<body>
  <h3>Form Registrasi</h3>
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
          Password
          <input type="password" name="password1" required>
        </label>
      </li>
      <br>
      <li>
        <label>
          Konfirmasi Password :
          <input type="password" name="password2" required>
        </label>
      </li>
      <br>
      <li>
        <button type="submit" name="registrasi">REGISTRASI</button>
      </li>
    </ul>
  </form>
</body>

</html>
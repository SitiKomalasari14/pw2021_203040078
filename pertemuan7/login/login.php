<?php
/*
Siti Komalasari
203040078
github.com/SitiKomalasari14/pw2021_203040078
Pertemuan 7 - (19 Maret 2021)
Materi pertemuan 7 ini menjelaskan tentang Metode GET AND POST
MEMBUAT FORM LOGIN
*/
?>

<?php 
// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"]) ) {
    // cek username dan password
    if($_POST["username"] ==  "admin" && $_POST["password"] == "123") {
    // jika benar, redirect ke halaman admin
        header("Location: admin.php");
        exit;
    } else {
    // jika salah, tampilkan pesan kesalahan
        $error = true;
    } 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body>

<h1>Login Admin</h1>

<?php if (isset($error) ) : ?>
    <p style="color: red; font-style: italic;">username / password salah!</p>
<?php endif; ?>

<ul>
<form action="" method="post">
    <li>
        <label for="username">username :</label>
        <input type="text" name="username" id="username">
    </li>
    <li>
    <label for="password">password :</label>
    <input type="password" name="password" id="password">
    </li>
    <li>
        <button type="submit" name="submit">Login</button>
    </li>
</form>
</ul>

</body>
</html>
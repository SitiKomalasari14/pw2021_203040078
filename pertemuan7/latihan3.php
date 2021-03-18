<?php
/*
Siti Komalasari
203040078
github.com/SitiKomalasari14/pw2021_203040078
Pertemuan 7 - (19 Maret 2021)
Materi pertemuan 7 ini menjelaskan tentang Metode GET AND POST
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>POST</title>
</head>
<body>

<?php if( isset($_POST["submit"]) ) : ?>
    <h1>Halo, Selamat Datang <?= $_POST["nama"]; ?></h1>
<?php endif; ?>

<form action="" method="post">
    Masukkan Nama: 
    <input type="text" name="nama">
    <br>
    <button type="submit" name="submit">Kirim</button>
</form>

</body>
</html>
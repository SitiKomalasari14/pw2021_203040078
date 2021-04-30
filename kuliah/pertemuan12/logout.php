<?php
/*
Siti Komalasari
203040078
github.com/SitiKomalasari14/pw2021_203040078
Pertemuan 12 - (30 APRIL 2021)
Materi pertemuan kali ini membuat mempelajari mengenai LOGIN & REGISTRASI
*/
?>
<?php
session_start();
session_destroy();
header("Location: login.php");
exit;
?>
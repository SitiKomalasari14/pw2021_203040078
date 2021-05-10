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

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// Jika tidak ada id di URL
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

// Mengambil id dari URL
$id = $_GET['id'];

if (hapus($id) > 0) {
  echo "<script>
          alert('data BERHASIL dihapus');
          document.location.href = 'index.php';
       </script>";
} else {
  echo "data GAGAL dihapus!";
}

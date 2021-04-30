<?php
/*
Siti Komalasari
203040078
github.com/SitiKomalasari14/pw2021_203040078
Pertemuan 11 - (30 APRIL 2021)
Materi pertemuan kali ini membuat mempelajari mengenai ubah dan hapus data, serta fitur searching
*/
?>
<?php
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

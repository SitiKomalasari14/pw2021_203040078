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
$id = $_GET['id_buku'];

if (hapus($id) > 0) {
    echo "<script>
            alert('Data BERHASIL dihapus!');
            document.location.href = 'admin.php';
        </script>";
} else {
    echo "<script>
            alert('Data GAGAL dihapus!');
            document.location.href = 'admin.php';
        </script>";
}
?>
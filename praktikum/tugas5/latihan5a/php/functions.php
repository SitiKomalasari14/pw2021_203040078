<?php
/*
Siti Komalasari
203040078
SHIFT Jum'at 10:00 - 11:00
B - Informatika
*/
?>
<?php
// function melakukan connect ke database
$conn = mysqli_connect("localhost", "root", "", "pw_tubes_203040078");
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040078");

    return $conn;
}
// function untuk melakukan query dan memasukkannya ke dalam ARRAY
function query($sqL)
{
    $conn = koneksi();
    $result = mysqli_query($conn, $sqL);
    $buku = [];
    while ($bk = mysqli_fetch_assoc($result)) {
        $buku[] = $bk;
    };
    return $buku;
}
?>
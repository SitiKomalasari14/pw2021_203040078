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

//fungsi untuk menambahkan data didalam dtabase
function tambah($data)
{
    $conn = koneksi();

    $judul = htmlspecialchars($data['judul']);
    $gambar = htmlspecialchars($data['gambar']);
    $pengarang = htmlspecialchars($data['pengarang']);
    $sinopsis = htmlspecialchars($data['sinopsis']);
    $harga = htmlspecialchars($data['harga']);
    $kategori = htmlspecialchars($data['kategori']);

    $query = "INSERT INTO buku
                    VALUES
                        ('', '$judul', '$gambar', '$pengarang', '$sinopsis', '$harga', '$kategori')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

//fungsi menghapus data berdasarkan id
function hapus($id) 
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM buku WHERE id_buku = $id");

    return mysqli_affected_rows($conn);
}

//fungsi ubah data
function ubah($data)
{
    $conn = koneksi();

    $id = $data['id_buku'];
    $judul = htmlspecialchars($data['judul']);
    $gambar = htmlspecialchars($data['gambar']);
    $pengarang = htmlspecialchars($data['pengarang']);
    $sinopsis = htmlspecialchars($data['sinopsis']);
    $harga = htmlspecialchars($data['harga']);
    $kategori = htmlspecialchars($data['kategori']);

    $query = "UPDATE buku
            SET
            judul = '$judul', 
            gambar = '$gambar', 
            pengarang = '$pengarang', 
            sinopsis = '$sinopsis',
            harga = '$harga', 
            kategori= '$kategori' 
            WHERE id_buku = $id
            ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
}

// fungsi cari
function cari($keyword) {
    $query = "SELECT * FROM buku
            WHERE
            judul LIKE '%$keyword%' OR
            pengarang LIKE '%$keyword%' OR
            sinopsis LIKE '%$keyword%' OR
            harga LIKE '%$keyword%' OR
            kategori LIKE '%$keyword%'
    ";
    return query($query);
}

//fungsi REGISTRASI
function registrasi($data)
{
   $conn = koneksi();
   $username = strtolower(stripcslashes($data["username"]));
   $password = mysqli_real_escape_string($conn, $data["password"]);

    //  cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
            alert('username sudah digunakan');
            </script>";
            return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambah user baru
    $query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}
?>

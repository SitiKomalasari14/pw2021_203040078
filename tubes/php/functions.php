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

// fungsi upload
function upload()
{
    $nama_file = $_FILES['gambar']['name'];
    $tipe_file = $_FILES['gambar']['type'];
    $ukuran_file = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmp_file = $_FILES['gambar']['tmp_name'];

    // ketika tidak ada file yang dipilih
    if ($error == 4) {
        // echo "<script>
        //         alert('Pilih gambar terlebih dahulu');
        // </script>";
        return 'nophoto.jpg';
    }

    // cek ekstensi file
    $daftar_gambar = ['jpg', 'jpeg', 'png', 'jfif', 'gif'];
    $ekstensi_file = explode('.', $nama_file);
    $ekstensi_file = strtolower(end($ekstensi_file));

    if (!in_array($ekstensi_file, $daftar_gambar)) {
        echo "<script>
                alert('Yang anda pilih BUKAN GAMBAR!!!');
        </script>";
        return false;
    }

    // cek type file
    if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
        echo "<script>
                alert('Yang anda pilih BUKAN GAMBAR!!!');
              </script>";
        return false;
    }

    // cek ukuran file
    if ($ukuran_file > 50000000) {
        echo "<script>
                alert('Ukuran file terlalu besar!!!');
              </script>";
        return false;
    }

    // siap upload file
    // generate ulang  nama file gambar baru
    $nama_file_baru = uniqid();
    $nama_file_baru .= '.';
    $nama_file_baru .= $ekstensi_file;
    move_uploaded_file($tmp_file, '../assets/img/' . $nama_file_baru);

    return $nama_file_baru;
}

//fungsi untuk menambahkan data didalam dtabase
function tambah($data)
{
    $conn = koneksi();

    $judul = htmlspecialchars($data['judul']);
    // $gambar = htmlspecialchars($data['gambar']);
    $pengarang = htmlspecialchars($data['pengarang']);
    $sinopsis = htmlspecialchars($data['sinopsis']);
    $harga = htmlspecialchars($data['harga']);
    $kategori = htmlspecialchars($data['kategori']);

    // upload gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    }

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

    $bk = query("SELECT * FROM buku WHERE id_buku = $id")[0];
    if ($bk['gambar'] != 'nophoto.jpg') {
        unlink('../assets/img/' . $bk['gambar']);
    }

    mysqli_query($conn, "DELETE FROM buku WHERE id_buku = $id") or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

//fungsi ubah data
function ubah($data)
{
    $conn = koneksi();

    $id = $data['id_buku'];
    $judul = htmlspecialchars($data['judul']);
    $gambar_lama = htmlspecialchars($data['gambar_lama']);
    $pengarang = htmlspecialchars($data['pengarang']);
    $sinopsis = htmlspecialchars($data['sinopsis']);
    $harga = htmlspecialchars($data['harga']);
    $kategori = htmlspecialchars($data['kategori']);

    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    if ($gambar == 'nophoto.jpg') {
        $gambar = $gambar_lama;
    }

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
function cari($keyword)
{
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

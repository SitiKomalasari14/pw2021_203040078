<?php
/*
Siti Komalasari
203040078
SHIFT Jum'at 10:00 - 11:00
B - Informatika
*/
?>
<?php 
$buku = [
    [
        "nama" => "Bulan",
        "gambar" => "1.jpg",
        "pengarang" => "Tere Liye",
        "sinopsis" => "Bulan merupakan novel kedua atau sekuel dari novel Bumi. Nama tokoh di dalam novel tersebut adalah Seli. Ia adalah seorang gadis yang berusia 15 tahun.  Seli, seorang gadis remaja yang tangannya dapat mengeluarkan petir.",
        "harga" => 99000,
        "kategori" => "Novel"
    ],
    [
        "nama" => "Bumi Manusia",
        "gambar" => "2.jpg",
        "pengarang" => "Ananta Toer",
        "sinopsis" => "Novel ini berisikan sebuah cerita tentang perlawanan kaum pribumi melawan kolonialisme belanda. Cerita ini bermula saat pribumi bernama Minke pemuda pribumi putra seorang bupati yang berkesempatan menempuh pendidikan di H.B.S merupakan salah satu siswa yang pandai.",
        "harga" => 150000,
        "kategori" => "Novel"
    ],
    [
        "nama" => "Bumi",
        "gambar" => "3.jpg",
        "pengarang" => "Tere Liye",
        "sinopsis" => " Namaku Raib, usiaku 15 tahun, kelas sepuluh. Aku sama seperti remaja kebanyakan, kecuali satu hal. Sesuatu yang kusimpan sendiri sejak kecil. Sesuatu yang menakjubkan. Sejak umur 22 bulan, aku bisa menghilang. Cukup dengan menutup wajah dengan kedua tangan tubuhku pun menghilang.",
        "harga" => 97000,
        "kategori" => "Novel"
    ],
    [
        "nama" => "Dilan 1991",
        "gambar" => "4.jpg",
        "pengarang" => "Pidi Baiq",
        "sinopsis" => "Novel Dilan ini menceritakan sebuah kisah seorang perempuan yang bernama Milea. Milea merupakan seorang murid yang baru saja pindah dari Jakarta. Ketika Milea pergi menuju sekolahnya, dia bertemu dengan teman yang kebetulan satu sekolahan dengannya. temannya itu adalah seorang yang suka meramal",
        "harga" => 99000,
        "kategori" => "Novel"
    ],
    [
        "nama" => "Hujan",
        "gambar" => "5.jpg",
        "pengarang" => "Tere Liye",
        "sinopsis" => "Diawali dengan kedatangan Lail di ruang operasi yang penuh peralatan modern. Lail meminta Elijah, seorang fasilitator kesehatan untuk membantunya menghapus sebagian memori otaknya yang berkait dengan hujan. Padahal hujan, pada awalnya, selalu menghadirkan kenangan-kenangan yang indah bagi Lail.",
        "harga" => 89000,
        "kategori" => "Novel"
    ],
    [
        "nama" => "Laskar Pelangi",
        "gambar" => "6.jpg",
        "pengarang" => "Andrea Hirata",
        "sinopsis" => "Novel Laskar Pelangi bercerita tentang kehidupan anak-anak di Belitong. Laskar pelangi yang ditulis oleh Andrea Hirata dimulai dengan kisah miris dunia pendidikan di Indonesia dimana sebuah sekolah yang kekurangan murid hendak ditutup. Sekolah tersebut adalah SD Muhammadiyah di Gentong Belitung Timur.",
        "harga" => 89000,
        "kategori" => "Novel"
    ],
    [
        "nama" => "Milea: Suara dari Dilan",
        "gambar" => "7.jpg",
        "pengarang" => "Pidi baiq",
        "sinopsis" => "Novel ini menceritakan pengenalan singkat Dilan waktu dia masih kecil, kira-kira waktu masih berumur 5 tahun, pernag ingin menjadi macan walaupun itu tidak mungkin. Dia pernah menamai sepedanya dengan nama mobil. Dia juga pernah sholat menggunakan mukena.",
        "harga" => 99000,
        "kategori" => "Novel"
    ],
    [
        "nama" => "Matahari",
        "gambar" => "8.jpg",
        "pengarang" => "Tere Liye",
        "sinopsis"=> "Novel ini merupakan buku ketiga dari serial “Bumi”. Di dalam buku novel ini diceritakan kembali petualangan Raib dengan kedua sahabatnya yaitu Seli dan Ali. Jika di novel sebelumnya yaitu novel Bulan, mereka melakukan perjalanan di Klan Matahari, maka di novel ini mereka melakukan petualangan di Klan Bintang, sebuah klan yang hanya dianggap sebuah legenda karena nyaris tak satupun orang mengetahui dimana letak klan ini berada.",
        "harga" => 99000,
        "kategori" => "Novel"
    ],
    [
        "nama" => "Pulang",
        "gambar" => "9.jpg",
        "pengarang" => "Tere Liye",
        "sinopsis"=> "Novel ini menceritakan tentang perjalanan pulang seorang bujang, pimpinan ribuan anggota keluarga dan puluhan perusahaan yang tersebar di seluruh kawasan Asia Pasifik. Seorang samurai sejati. Yang berhasil mencapai tujuannya, pulang.",
        "harga" => 79000,
        "kategori" => "Novel"
    ],
    [
        "nama" => "Sang Pemimpi",
        "gambar" => "10.jpg",
        "pengarang" => "Andrea Hirata",
        "sinopsis" => "Novel ini menceritakan tentang perjuangan tiga orang laki-laki yang telah lulus SMP, melanjutkan belajar ke SMA yang bukan main. Disinilah perjuangan dan cita-cita ketiga laki-laki ini di mulai yakni Ikal, Arai dan Jimron.",
        "harga" => 98000,
        "kategori" => "Novel"
    ],
]
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>BOOK_ID</title>
  </head>
  <body>
  <div class="container mt-5 mb-5 text-center">
     <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Judul</th>
            <th scope="col">Gambar</th>
            <th scope="col">Pengarang</th>
            <th scope="col">Sinopsis</th>
            <th scope="col">Harga</th>
            <th scope="col">Kategori</th>
            </tr>
        </thead>
    <tbody>
        <?php foreach($buku as $n => $b) : ?>
        <tr>
            <td><?= $n+1; ?></td>
            <td><?= $b["nama"]; ?></td>
            <td>
                <img src="img/<?= $b["gambar"]; ?>">
            </td>
            <td><?= $b["pengarang"]; ?></td>
            <td><?= $b["sinopsis"]; ?></td>
            <td><?= $b["harga"]; ?></td>
            <td><?= $b["kategori"]; ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
  </div>
 </body>
</table>
</html>
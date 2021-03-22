-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2021 at 05:35 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040078`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `sinopsis` text NOT NULL,
  `harga` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `gambar`, `pengarang`, `sinopsis`, `harga`, `kategori`) VALUES
(1, 'Bulan', '1.jpg', 'Tere Liye', 'Bulan merupakan novel kedua atau sekuel dari novel Bumi. Nama tokoh di dalam novel tersebut adalah Seli. Ia adalah seorang gadis yang berusia 15 tahun.  Seli, seorang gadis remaja yang tangannya dapat mengeluarkan petir.', '99.000', 'Novel'),
(2, 'Bumi Manusia', '2.jpg', 'Ananta Noer', 'Novel ini berisikan sebuah cerita tentang perlawanan kaum pribumi melawan kolonialisme belanda. Cerita ini bermula saat pribumi bernama Minke pemuda pribumi putra seorang bupati yang berkesempatan menempuh pendidikan di H.B.S merupakan salah satu siswa yang pandai.', '150.000', 'Novel'),
(3, 'Bumi', '3.jpg', 'Tere Liye', ' Namaku Raib, usiaku 15 tahun, kelas sepuluh. Aku sama seperti remaja kebanyakan, kecuali satu hal. Sesuatu yang kusimpan sendiri sejak kecil. Sesuatu yang menakjubkan. Sejak umur 22 bulan, aku bisa menghilang. Cukup dengan menutup wajah dengan kedua tangan tubuhku pun menghilang.', '97.000', 'Novel'),
(4, 'Dilan 1991', '4.jpg', 'Pidi Baiq', 'Novel Dilan ini menceritakan sebuah kisah seorang perempuan yang bernama Milea. Milea merupakan seorang murid yang baru saja pindah dari Jakarta. Ketika Milea pergi menuju sekolahnya, dia bertemu dengan teman yang kebetulan satu sekolahan dengannya. temannya itu adalah seorang yang suka meramal', '99.000', 'Novel'),
(5, 'Hujan', '5.jpg', 'Tere Liye', 'Diawali dengan kedatangan Lail di ruang operasi yang penuh peralatan modern. Lail meminta Elijah, seorang fasilitator kesehatan untuk membantunya menghapus sebagian memori otaknya yang berkait dengan hujan. Padahal hujan, pada awalnya, selalu menghadirkan kenangan-kenangan yang indah bagi Lail.', '89.000', 'Novel'),
(6, 'Laskar Pelangi', '6.jpg', 'Andrea Hirata', 'Novel Laskar Pelangi bercerita tentang kehidupan anak-anak di Belitong. Laskar pelangi yang ditulis oleh Andrea Hirata dimulai dengan kisah miris dunia pendidikan di Indonesia dimana sebuah sekolah yang kekurangan murid hendak ditutup. Sekolah tersebut adalah SD Muhammadiyah di Gentong Belitung Timur.', '89.000', 'Novel'),
(7, 'Milea: Suara dari Dilan', '7.jpg', 'Pidi Baiq', 'Novel ini menceritakan pengenalan singkat Dilan waktu dia masih kecil, kira-kira waktu masih berumur 5 tahun, pernag ingin menjadi macan walaupun itu tidak mungkin. Dia pernah menamai sepedanya dengan nama mobil. Dia juga pernah sholat menggunakan mukena.', '99.000', 'Novel'),
(8, 'Matahari ', '8.jpg', 'Tere Liye', 'Novel ini merupakan buku ketiga dari serial “Bumi”. Di dalam buku novel ini diceritakan kembali petualangan Raib dengan kedua sahabatnya yaitu Seli dan Ali. Jika di novel sebelumnya yaitu novel Bulan, mereka melakukan perjalanan di Klan Matahari, maka di novel ini mereka melakukan petualangan di Klan Bintang, sebuah klan yang hanya dianggap sebuah legenda karena nyaris tak satupun orang mengetahui dimana letak klan ini berada.', '99.000', 'Novel'),
(9, 'Pulang', '9.jpg', 'Tere Liye', 'Novel ini menceritakan tentang perjalanan pulang seorang bujang, pimpinan ribuan anggota keluarga dan puluhan perusahaan yang tersebar di seluruh kawasan Asia Pasifik. Seorang samurai sejati. Yang berhasil mencapai tujuannya, pulang.', '79.000', 'Novel'),
(10, 'Sang Pemimpi', '10.jpg', 'Andrea Hirata', 'Novel ini menceritakan tentang perjuangan tiga orang laki-laki yang telah lulus SMP, melanjutkan belajar ke SMA yang bukan main. Disinilah perjuangan dan cita-cita ketiga laki-laki ini di mulai yakni Ikal, Arai dan Jimron.', '98.000', 'Novel');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

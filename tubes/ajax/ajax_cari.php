<?php
require '../php/functions.php';
$buku = cari($_GET["keyword"]);
?>
<table class="highlight - centered grey lighten-2">
  <thead>
    <tr class="grey darken-1">
      <th>No</th>
      <th>Judul</th>
      <th>Gambar</th>
      <th>Pengarang</th>
      <th>Deskripsi</th>
      <th>Harga</th>
      <th>Kategori</th>
      <th>#</th>
      <th>Opsi</th>
    </tr>
  </thead>
  <tbody>
    <?php if (empty($buku)) : ?>
      <tr>
        <td colspan="7">
          <h1>Data tidak ditemukan</h1>
        </td>
      </tr>
    <?php else : ?>
      <?php $i = 1; ?>
      <?php foreach ($buku as $bk) : ?>
        <tr>
          <td><?= $i; ?></td>
          <td><?= $bk["judul"]; ?></td>
          <td>
            <img src="../assets/img/<?= $bk["gambar"]; ?>">
          </td>
          <td><?= $bk["pengarang"]; ?></td>
          <td><?= $bk["sinopsis"]; ?></td>
          <td><?= $bk["harga"]; ?></td>
          <td><?= $bk["kategori"]; ?> </td>
          <td>
            <a href="../php/detail.php?id_buku=<?= $bk['id_buku'] ?>" <?= $bk["judul"] ?>>Lihat Produk</a>
          </td>
          <td>
            <a href="ubah.php?id_buku=<?= $bk['id_buku'] ?>" class="waves-effect waves-light green darken-3 btn-small">EDIT</a></a>
            <a href="hapus.php?id_buku=<?= $bk['id_buku'] ?>" onclick="return confirm('Hapus Data???')" class="waves-effect waves-light red accent-4 btn-small">DELETE</a></a>
          </td>
        </tr>
        <?php $i++; ?>
      <?php endforeach; ?>
    <?php endif; ?>
  </tbody>
</table>
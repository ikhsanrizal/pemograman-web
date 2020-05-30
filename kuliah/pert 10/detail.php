<?php
require 'function.php';


$id = $_GET['id'];

// query mahasiswa berdasarkan id
$m = query("select * from mahasiswa where id = $id");


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
</head>

<body>
  <h3>Detail Mahasiswa</h3>
  <ul>
    <li><img src="img/<?= $m['gambar']; ?>" width="100px"></li>
    <li>NRP : <?= $m['nrp']; ?></li>
    <li>Nama : <?= $m['nama']; ?></li>
    <li>email : <?= $m['email']; ?></li>
    <li>jurusan : <?= $m['jurusan']; ?></li>
    <li><a href="">Ubah</a> | <a href="">Hapus</a></li>
    <li><a href="latihan3.php">Kembali ke daftar mahasiswa</a></li>
  </ul>
</body>

</html>
<?php
include "koneksi.php";

$query = mysqli_query($conn, "SELECT * FROM penyewa ORDER BY id_penyewa ASC");
?>

<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Data Penyewa</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

<style>

body{
    background:#fff5fa;
}

.navbar{
    background:#ff4f8b;
}

.navbar-brand{
    color:white;
    font-weight:bold;
}

.card{
    border:none;
    border-radius:20px;
    box-shadow:0 10px 25px rgba(255,105,180,.2);
}

.table thead{
    background:#ff4f8b;
    color:white;
}

.btn-pink{
    background:#ff4f8b;
    color:white;
}

.btn-pink:hover{
    background:#ff2e75;
    color:white;
}

</style>

</head>
<body>

<nav class="navbar">

<div class="container">

<a class="navbar-brand" href="index.php">

<i class="bi bi-house-heart-fill"></i>

Sistem Informasi Kost Umik Endang

</a>

</div>

</nav>

<div class="container mt-5">

<div class="card">

<div class="card-body">

<div class="d-flex justify-content-between mb-4">

<h3>👥 Data Penyewa</h3>

<a href="tambah_penyewa.php" class="btn btn-pink">

<i class="bi bi-plus-circle"></i>

Tambah Penyewa

</a>

</div>

<table class="table table-bordered table-hover">

<thead>

<tr>

<th>No</th>
<th>ID Penyewa</th>
<th>Nama</th>
<th>Alamat</th>
<th>No HP</th>
<th>Email</th>
<th>Aksi</th>

</tr>

</thead>

<tbody>

<?php

$no=1;

while($data=mysqli_fetch_array($query)){

?>

<tr>

<td><?= $no++; ?></td>

<td><?= $data['id_penyewa']; ?></td>

<td><?= $data['nama']; ?></td>

<td><?= $data['alamat']; ?></td>

<td><?= $data['no_hp']; ?></td>

<td><?= $data['email']; ?></td>

<td>

<a href="edit_penyewa.php?id=<?= $data['id_penyewa']; ?>" class="btn btn-warning btn-sm">

<i class="bi bi-pencil-square"></i>

</a>

<a href="hapus_penyewa.php?id=<?= $data['id_penyewa']; ?>" class="btn btn-danger btn-sm"
onclick="return confirm('Yakin ingin menghapus data?')">

<i class="bi bi-trash"></i>

</a>

</td>

</tr>

<?php } ?>

</tbody>

</table>

</div>

</div>

</div>

</body>
</html>
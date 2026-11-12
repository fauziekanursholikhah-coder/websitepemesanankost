<?php
session_start();

include "koneksi.php";

// Ambil 5 kamar yang tersedia
$data = mysqli_query($conn, "
    SELECT * FROM kamar
    WHERE status = 'Tersedia'
    LIMIT 5
");
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Daftar Kamar Kost</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    background: linear-gradient(135deg,#ffe4f1,#ffd6ec,#ffc1e3);
    min-height:100vh;
    font-family:'Segoe UI',sans-serif;
}

.judul{
    text-align:center;
    color:#d63384;
    font-weight:bold;
    margin-bottom:30px;
}

.card-kamar{
    border:none;
    border-radius:25px;
    overflow:hidden;
    transition:0.3s;
    box-shadow:0 10px 25px rgba(0,0,0,0.08);
}

.card-kamar:hover{
    transform:translateY(-8px);
}

.card-kamar img{
    height:220px;
    object-fit:cover;
}

.harga{
    color:#ff4f9c;
    font-weight:bold;
    font-size:22px;
}

.status{
    font-weight:bold;
}

.tersedia{
    color:green;
}

.penuh{
    color:red;
}

.btn-pesan{
    background:#ff73b3;
    border:none;
    border-radius:15px;
    width:100%;
    padding:10px;
    color:white;
    font-weight:bold;
}

.btn-pesan:hover{
    background:#ff4f9c;
}

</style>

</head>
<body>

<div class="container py-4">

    <h2 class="judul">
        🌸 Daftar Kamar Kost Umik Endang 🌸
    </h2>

    <div class="row">

    <?php
    if(mysqli_num_rows($data) > 0){

        while($row = mysqli_fetch_assoc($data)){
    ?>

        <div class="col-md-4 mb-4">

            <div class="card card-kamar">

                <img src="gambar/<?= $row['foto']; ?>"
                     alt="Foto Kamar">

                <div class="card-body">

                    <h5 class="card-title">
                        Kamar <?= $row['nomor_kamar']; ?>
                    </h5>

                    <p class="harga">
                        Rp <?= number_format($row['harga'],0,',','.'); ?>
                    </p>

                    <p>
                        <strong>Fasilitas:</strong><br>
                        <?= $row['fasilitas']; ?>
                    </p>

                    <p class="status">
                        Status :
                        <span class="tersedia">
                            <?= $row['status']; ?>
                        </span>
                    </p>

                    <a href="pesan.php?id=<?= $row['id_kamar']; ?>"
                       class="btn btn-pesan">
                        🏠 Pesan Sekarang
                    </a>

                </div>

            </div>

        </div>

    <?php
        }

    } else {
    ?>

        <div class="col-12">
            <div class="alert alert-warning text-center">
                Tidak ada kamar yang tersedia saat ini.
            </div>
        </div>

    <?php } ?>

    </div>

</div>

</body>
</html>
<?php
session_start();
include "koneksi.php";

// ambil data laporan pembayaran
$query = mysqli_query($conn, "
    SELECT 
        pembayaran.id_bayar,
        penyewa.nama AS nama_penyewa,
        kamar.nomor_kamar,
        kamar.harga,
        pembayaran.tanggal_bayar,
        pembayaran.jumlah_bayar,
        pembayaran.status
    FROM pembayaran
    JOIN penyewa ON pembayaran.id_penyewa = penyewa.id_penyewa
    JOIN kamar ON pembayaran.id_kamar = kamar.id_kamar
    ORDER BY pembayaran.tanggal_bayar DESC
");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Laporan Pembayaran</title>
    <style>
        body{
            font-family: Arial;
            background:#f5f5f5;
        }
        .container{
            width: 90%;
            margin: 30px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
        }
        h2{
            text-align:center;
        }
        table{
            width:100%;
            border-collapse: collapse;
            margin-top:20px;
        }
        table, th, td{
            border:1px solid #ddd;
        }
        th{
            background:#3498db;
            color:white;
            padding:10px;
        }
        td{
            padding:10px;
            text-align:center;
        }
        .lunas{
            color:green;
            font-weight:bold;
        }
        .belum{
            color:red;
            font-weight:bold;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Laporan Pembayaran Kost</h2>

    <table>
        <tr>
            <th>No</th>
            <th>Nama Penyewa</th>
            <th>No Kamar</th>
            <th>Harga Kamar</th>
            <th>Tanggal Bayar</th>
            <th>Jumlah Bayar</th>
            <th>Status</th>
        </tr>

        <?php
        $no = 1;
        while($data = mysqli_fetch_assoc($query)){
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $data['nama_penyewa']; ?></td>
            <td><?= $data['nomor_kamar']; ?></td>
            <td>Rp <?= number_format($data['harga'],0,',','.'); ?></td>
            <td><?= $data['tanggal_bayar']; ?></td>
            <td>Rp <?= number_format($data['jumlah_bayar'],0,',','.'); ?></td>
            <td>
                <?php if($data['status'] == "Lunas"){ ?>
                    <span class="lunas">Lunas</span>
                <?php } else { ?>
                    <span class="belum">Belum Lunas</span>
                <?php } ?>
            </td>
        </tr>
        <?php } ?>
    </table>

</div>

</body>
</html>
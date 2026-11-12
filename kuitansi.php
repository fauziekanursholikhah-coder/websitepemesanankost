<?php
include "koneksi.php";

$mulai = $_GET['mulai'] ?? '';
$selesai = $_GET['selesai'] ?? '';

if($mulai != '' && $selesai != ''){
    $query = mysqli_query($conn,"
        SELECT *
        FROM pemesanan
        WHERE tanggal_bayar BETWEEN '$mulai' AND '$selesai'
        ORDER BY tanggal_bayar ASC
    ");
}else{
    $query = mysqli_query($conn,"
        SELECT *
        FROM pemesanan
        ORDER BY tanggal_bayar DESC
    ");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Laporan Pembayaran</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    background:linear-gradient(135deg,#ffe4f1,#ffd6ec,#ffc1e3);
    min-height:100vh;
    font-family:'Segoe UI',sans-serif;
}

.card-laporan{
    border:none;
    border-radius:25px;
    box-shadow:0 10px 30px rgba(255,105,180,.25);
}

.header-laporan{
    background:linear-gradient(45deg,#ff4f9f,#ff85c1);
    color:white;
    padding:20px;
    border-radius:25px 25px 0 0;
    text-align:center;
    font-size:28px;
    font-weight:bold;
    letter-spacing:2px;
}

.btn-pink{
    background:linear-gradient(45deg,#ff4f9f,#ff85c1);
    border:none;
    color:white;
    font-weight:bold;
}

.btn-pink:hover{
    color:white;
    transform:scale(1.03);
}

.btn-soft{
    background:#ffc1e3;
    color:#8b004f;
    border:none;
    font-weight:bold;
}

.table thead{
    background:#ff85c1;
    color:white;
}

</style>

</head>
<body>

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-lg-10">

            <div class="card card-laporan">

                <div class="header-laporan">
                    📄 LAPORAN PEMBAYARAN
                </div>

                <div class="card-body p-4">

                    <form method="GET">

                        <div class="row mb-4">

                            <div class="col-md-5">
                                <label class="fw-bold">
                                    Periode Mulai
                                </label>

                                <input
                                    type="date"
                                    name="mulai"
                                    class="form-control"
                                    value="<?= $mulai ?>">
                            </div>

                            <div class="col-md-5">
                                <label class="fw-bold">
                                    Sampai
                                </label>

                                <input
                                    type="date"
                                    name="selesai"
                                    class="form-control"
                                    value="<?= $selesai ?>">
                            </div>

                        </div>

                        <div class="d-flex gap-3 mb-4">

                            <button
                                type="submit"
                                class="btn btn-pink">
                                🔍 Tampilkan
                            </button>

                            <button
                                type="button"
                                onclick="window.print()"
                                class="btn btn-soft">
                                🖨 Cetak PDF
                            </button>

                            <a
                                href="export_excel.php"
                                class="btn btn-success">
                                📊 Export Excel
                            </a>

                        </div>

                    </form>

                    <hr>

                    <h5 class="mb-3 text-danger">
                        📋 Tabel Data Laporan
                    </h5>

                    <div class="table-responsive">

                        <table class="table table-bordered table-hover">

                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Penyewa</th>
                                    <th>Nominal</th>
                                    <th>Bulan</th>
                                    <th>Tanggal Bayar</th>
                                    <th>Status</th>
                                </tr>
                            </thead>

                            <tbody>

                            <?php
                            $no = 1;

                            while($data = mysqli_fetch_array($query)){
                            ?>

                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $data['nama_penyewa'] ?></td>
                                    <td>Rp <?= number_format($data['nominal']) ?></td>
                                    <td><?= $data['bulan'] ?></td>
                                    <td><?= $data['tanggal_bayar'] ?></td>
                                    <td><?= $data['status'] ?></td>
                                </tr>

                            <?php } ?>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>
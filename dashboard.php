<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
include "koneksi.php";

$jml_kamar = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM kamar"));
$jml_penyewa = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM penyewa"));
$jml_pesan = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM pemesanan"));
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Dashboard Admin - Kost Umik Endang</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>

body{
    background: linear-gradient(135deg,#ffe4f1,#ffd6ec,#ffc1e3);
    min-height:100vh;
    font-family:'Segoe UI',sans-serif;
}

.navbar{
    background: rgba(255,255,255,0.25);
    backdrop-filter: blur(12px);
    border-bottom:1px solid rgba(255,255,255,0.3);
}

.brand{
    color:#d63384;
    font-weight:bold;
    font-size:24px;
}

.welcome-box{
    background:white;
    border-radius:25px;
    padding:25px;
    box-shadow:0 10px 30px rgba(0,0,0,0.08);
}

.card-dashboard{
    border:none;
    border-radius:25px;
    overflow:hidden;
    transition:0.3s;
    box-shadow:0 10px 25px rgba(0,0,0,0.08);
}

.card-dashboard:hover{
    transform:translateY(-5px);
}

.icon-box{
    font-size:50px;
    margin-bottom:10px;
}

.kamar{
    background:linear-gradient(135deg,#ff9ecf,#ff73b3);
    color:white;
}

.penyewa{
    background:linear-gradient(135deg,#ffb6d9,#ff8cc5);
    color:white;
}

.pesan{
    background:linear-gradient(135deg,#ff7eb6,#ff4f9c);
    color:white;
}

.menu-box{
    background:white;
    border-radius:25px;
    padding:25px;
    margin-top:25px;
    box-shadow:0 10px 25px rgba(0,0,0,0.08);
}

.btn-menu{
    width:100%;
    border:none;
    border-radius:15px;
    padding:15px;
    font-weight:bold;
    margin-bottom:15px;
    transition:0.3s;
}

.btn-menu:hover{
    transform:scale(1.03);
}

.btn-kamar{
    background:#ff73b3;
    color:white;
}

.btn-penyewa{
    background:#ff8cc5;
    color:white;
}

.btn-pemesanan{
    background:#ff4f9c;
    color:white;
}

.footer{
    text-align:center;
    margin-top:40px;
    color:#d63384;
    font-weight:600;
}

</style>

</head>

<body>

<nav class="navbar navbar-expand-lg shadow-sm">
    <div class="container">
        <span class="brand">
            🏠 Kost Umik Endang
        </span>

        <a href="logout.php" class="btn btn-danger rounded-pill">
            <i class="bi bi-box-arrow-right"></i>
            Logout
        </a>
    </div>
</nav>

<div class="container mt-4">

    <div class="welcome-box">

        <h2 class="text-danger">
            🌸 Selamat Datang
        </h2>

        <p class="text-secondary">
            Dashboard Admin Sistem Pemesanan Kamar Kost Umik Endang
        </p>

    </div>

    <div class="row mt-4">

        <div class="col-md-4 mb-3">

            <div class="card card-dashboard kamar">

                <div class="card-body text-center">

                    <div href="kamar.php" class="icon-box">
                        <i class="bi bi-house-door-fill"></i>
                    </div>

                    <h5>Total Kamar</h5>

                    <h1><?php echo $jml_kamar; ?></h1>

                </div>

            </div>

        </div>

        <div class="col-md-4 mb-3">

            <div class="card card-dashboard penyewa">

                <div class="card-body text-center">

                    <div class="icon-box">
                        <i class="bi bi-people-fill"></i>
                    </div>

                    <h5>Total Penyewa</h5>

                    <h1><?php echo $jml_penyewa; ?></h1>

                </div>

            </div>

        </div>

        <div class="col-md-4 mb-3">

            <div class="card card-dashboard pesan">

                <div class="card-body text-center">

                    <div class="icon-box">
                        <i class="bi bi-journal-check"></i>
                    </div>

                    <h5>Total Pemesanan</h5>

                    <h1><?php echo $jml_pesan; ?></h1>

                </div>

            </div>

        </div>

    </div>

    <div class="menu-box">

        <h4 class="mb-4 text-center text-danger">
            📋 Menu Pengelolaan
        </h4>

        <div class="row">

            <div class="col-md-4">
                <a href="kamar.php" class="btn btn-menu btn-kamar">
                    <i class="bi bi-house-heart-fill"></i>
                    Data Kamar
                </a>
            </div>

            <div class="col-md-4">
                <a href="penyewa.php" class="btn btn-menu btn-penyewa">
                    <i class="bi bi-person-lines-fill"></i>
                    Data Penyewa
                </a>
            </div>

            <div class="col-md-4">
                <a href="pemesanan.php" class="btn btn-menu btn-pemesanan">
                    <i class="bi bi-clipboard-check-fill"></i>
                    Data Pemesanan
                </a>
            </div>

        </div>

    </div>

    <div class="footer">
        🌷 © 2026 Kost Umik Endang | Sistem Pemesanan Kamar Kost Berbasis Web 🌷
    </div>

</div>

</body>
</html>
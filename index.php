<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Sistem Informasi Kost Umik Endang</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<style>

body{
    background:#fff7fb;
    font-family:'Poppins',sans-serif;
}

/* Sidebar */

.sidebar{
    position:fixed;
    width:250px;
    height:100%;
    background:linear-gradient(180deg,#ff7eb3,#ff4f8b);
    color:white;
}

.logo{
    padding:30px;
    text-align:center;
    border-bottom:1px solid rgba(255,255,255,.2);
}

.logo i{
    font-size:50px;
}

.logo h4{
    margin-top:10px;
    font-weight:bold;
}

.sidebar ul{
    padding:0;
    margin:20px 0;
}

.sidebar ul li{
    list-style:none;
}

.sidebar ul li a{

    display:block;
    color:white;
    text-decoration:none;
    padding:15px 30px;
    transition:.3s;
}

.sidebar ul li a:hover{

    background:rgba(255,255,255,.2);

}

/* Main */

.main{

    margin-left:250px;

}

/* Navbar */

.navbar-custom{

    height:70px;

    background:white;

    display:flex;

    justify-content:space-between;

    align-items:center;

    padding:0 30px;

    box-shadow:0 3px 12px rgba(0,0,0,.08);

}

.navbar-custom h4{

    color:#ff4f8b;

    font-weight:bold;

}

.content{

    padding:30px;

}

/* Card */

.card-dashboard{

    border:none;

    border-radius:20px;

    background:white;

    box-shadow:0 10px 25px rgba(255,105,180,.15);

    transition:.3s;

}

.card-dashboard:hover{

    transform:translateY(-5px);

}

.card-dashboard h2{

    color:#ff4f8b;

    font-weight:bold;

}

/* Box */

.box{

    background:white;

    border-radius:20px;

    padding:25px;

    margin-top:30px;

    box-shadow:0 10px 25px rgba(255,105,180,.15);

}

.table thead{

    background:#ff4f8b;

    color:white;

}

.badge{

    background:#ff4f8b;

}

</style>

</head>

<body>

<!-- Sidebar -->

<div class="sidebar">

<div class="logo">

<i class="bi bi-house-heart-fill"></i>

<h4>KOST UMIK ENDANG</h4>

<p>Dashboard </p>

</div>

<ul>

<li><a href="kuitansi.php"><i class="bi bi-book"></i> Cetak kuitansi</a></li>

<li><a href="kamar.php"><i class="bi bi-door-open"></i> Kamar kosong</a></li>

<li><a href="penyewa.php"><i class="bi bi-people-fill"></i> Penyewa</a></li>

<li><a href="pembayaran.php"><i class="bi bi-wallet2"></i> Pembayaran</a></li>

<li><a href="laporan.php"><i class="bi bi-file-earmark-text"></i> Laporan</a></li>

<li><a href="logoutuser.php"><i class="bi bi-box-arrow-right"></i> Logout</a></li>

</ul>

</div>

<!-- Main -->

<div class="main">

<div class="navbar-custom">

<h4>SISTEM INFORMASI KOST UMIK ENDANG</h4>
<div class="d-flex justify-content-center align-items-center gap-4 mt-5 flex-wrap">

    <a href="login.php"
       class="btn btn-lg"
       style="background:#ff4f8b;color:white;width:220px;height:60px;border-radius:15px;">

        <i class="bi bi-person-workspace"></i>
        Login Admin

    </a>

    <a href="loginuser.php"
       class="btn btn-lg"
       style="background:white;color:#ff4f8b;border:2px solid #ff4f8b;width:220px;height:60px;border-radius:15px;">

        <i class="bi bi-person"></i>
        Login Penyewa

    </a>

</div>

</div>

<div class="content">

<h3>🌸 Selamat Datang, Admin</h3>

<p class="text-muted">
Semoga harimu menyenangkan 😊
</p>

<div class="row g-4">

<div class="col-md-3">

<div class="card card-dashboard">

<div class="card-body text-center">

<i class="bi bi-house-heart fs-1 text-danger"></i>

<h5 class="mt-3">Total Kamar</h5>

<h2>60</h2>

</div>

</div>

</div>

<div class="col-md-3">

<div class="card card-dashboard">

<div class="card-body text-center">

<i class="bi bi-people fs-1 text-primary"></i>

<h5 class="mt-3">Penyewa Aktif</h5>

<h2>55</h2>

</div>

</div>

</div>

<div class="col-md-3">

<div class="card card-dashboard">

<div class="card-body text-center">

<i class="bi bi-door-open fs-1 text-warning"></i>

<h5 class="mt-3">Kamar Kosong</h5>

<h2>5</h2>

</div>

</div>

</div>

<div class="col-md-3">

<div class="card card-dashboard">

<div class="card-body text-center">

<i class="bi bi-cash-stack fs-1 text-success"></i>

<h5 class="mt-3">Pendapatan</h5>

<h4>Rp43.100.000</h4>

</div>

</div>

</div>

</div>

<div class="box">

<h5>📊 Grafik Okupansi Kamar</h5>

<div style="height:220px; width:100%;">
    <canvas id="chart"></canvas>
</div>

</div>

<script>

new Chart(document.getElementById("chart"),{

type:"doughnut",

data:{

labels:["Terisi","Kosong"],

datasets:[{

data:[18,2],

backgroundColor:[

"#ff4f8b",

"#ffd1e3"

]

}]

},

options:{

plugins:{

legend:{

position:"bottom"

}

}

}

});

</script>

</body>
</html>
<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Logout Berhasil</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    margin:0;
    padding:0;
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:linear-gradient(135deg,#ffe4f1,#ffd6ec,#ffc1e3);
    font-family:'Segoe UI',sans-serif;
}

.logout-card{
    background:white;
    width:400px;
    padding:40px;
    border-radius:30px;
    text-align:center;
    box-shadow:0 15px 35px rgba(255,105,180,0.2);
    animation:muncul 0.8s ease;
}

@keyframes muncul{
    from{
        opacity:0;
        transform:translateY(30px);
    }
    to{
        opacity:1;
        transform:translateY(0);
    }
}

.icon{
    font-size:80px;
    margin-bottom:20px;
}

h2{
    color:#d63384;
    font-weight:bold;
}

p{
    color:#666;
    margin-bottom:25px;
}

.btn-login{
    background:#ff73b3;
    border:none;
    border-radius:20px;
    padding:12px 30px;
    color:white;
    text-decoration:none;
    font-weight:bold;
    transition:0.3s;
    display:inline-block;
}

.btn-login:hover{
    background:#ff4f9c;
    transform:scale(1.05);
    color:white;
}
</style>

</head>
<body>

<div class="logout-card">

    <div class="icon">🌸</div>

    <h2>Logout Berhasil</h2>

    <p>
        Terima kasih sudah menggunakan<br>
        Sistem Informasi Kost Umik Endang 💖
    </p>

    <a href="loginuser.php" class="btn-login">
        Login Kembali
    </a>

</div>

</body>
</html>
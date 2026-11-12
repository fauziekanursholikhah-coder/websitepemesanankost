<?php
session_start();

if(!isset($_SESSION['id_user'])){
    header("Location: loginuser.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard User</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-5">

<h2>Selamat Datang</h2>

<h4><?php echo $_SESSION['nama']; ?></h4>

<hr>

<a href="kamar.php" class="btn btn-primary">
Lihat Kamar
</a>

<a href="logout_user.php" class="btn btn-danger">
Logout
</a>

</div>

</body>
</html>
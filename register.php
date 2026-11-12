<?php
include "koneksi.php";

if(isset($_POST['daftar'])){

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $simpan = mysqli_query($conn,"
        INSERT INTO user(nama,email,username,password)
        VALUES('$nama','$email','$username','$password')
    ");

    if($simpan){
        echo "<script>
        alert('Registrasi berhasil');
        window.location='loginuser.php';
        </script>";
    }else{
        echo "Gagal menyimpan data";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registrasi User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
<div class="card col-md-5 mx-auto">

<div class="card-header">
<h3>Registrasi User</h3>
</div>

<div class="card-body">

<form method="POST">

<div class="mb-3">
<label>Nama Lengkap</label>
<input type="text" name="nama" class="form-control" required>
</div>

<div class="mb-3">
<label>Email</label>
<input type="email" name="email" class="form-control" required>
</div>

<div class="mb-3">
<label>Username</label>
<input type="text" name="username" class="form-control" required>
</div>

<div class="mb-3">
<label>Password</label>
<input type="password" name="password" class="form-control" required>
</div>

<button type="submit" name="daftar" class="btn btn-success">
Daftar
</button>

<a href="loginuser.php" class="btn btn-primary">
Login
</a>

</form>

</div>
</div>
</div>

</body>
</html>
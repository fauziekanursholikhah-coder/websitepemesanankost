<?php
session_start();
include "koneksi.php";

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($conn,
    "SELECT * FROM admin
     WHERE username='$username'
     AND password='$password'");

    if(mysqli_num_rows($query) > 0){

        $_SESSION['username'] = $username;

        header("Location: dashboard.php");
        exit();

    } else {
        $pesan = "Username atau Password Salah!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login Admin</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-5">

<div class="card col-md-4 mx-auto">

<div class="card-header">
<h3 class="text-center">Login Admin</h3>
</div>

<div class="card-body">

<?php
if(isset($pesan)){
    echo "<div class='alert alert-danger'>$pesan</div>";
}
?>

<form method="POST">

<div class="mb-3">
<label>Username</label>
<input type="text" name="username" class="form-control">
</div>

<div class="mb-3">
<label>Password</label>
<input type="password" name="password" class="form-control">
</div>

<button type="submit" name="login" class="btn btn-primary w-100">
Login
</button>

</form>

</div>

</div>

</div>

</body>
</html>
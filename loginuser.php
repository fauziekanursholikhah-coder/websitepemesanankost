<?php
session_start();
include "koneksi.php";

$error = "";

if(isset($_POST['login'])){

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];

    $query = mysqli_query($conn,"
        SELECT * FROM user
        WHERE username='$username'
        AND password='$password'
    ");

    if(mysqli_num_rows($query) > 0){

        $data = mysqli_fetch_assoc($query);

        $_SESSION['id_user'] = $data['id_user'];
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['username'] = $data['username'];

        echo "
        <script>
            alert('Login Berhasil');
            window.location='dashboard.php';
        </script>
        ";
        exit();

    }else{

        $error = "Username atau Password Salah!";

    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Login User - Kost Umik Endang</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body style="
background: linear-gradient(135deg,#ffe4f1,#ffd6ec,#ffc1e3);
min-height:100vh;
font-family:'Segoe UI',sans-serif;
">

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-md-6 col-lg-5">

            <div class="card border-0 shadow-lg rounded-4">

                <div class="card-body p-4">

                    <div class="text-center mb-4">

                        <h1 class="text-danger">
                            🌸 Kost Umik Endang
                        </h1>

                        <h3>Login User</h3>

                        <p class="text-muted">
                            Silakan login untuk melakukan pemesanan kamar
                        </p>

                    </div>

                    <?php if($error != ""){ ?>

                    <div class="alert alert-danger">
                        <?php echo $error; ?>
                    </div>

                    <?php } ?>

                    <form method="POST">

                        <div class="mb-3">

                            <label class="form-label fw-bold">
                                Username
                            </label>

                            <input type="text"
                                   name="username"
                                   class="form-control"
                                   required>

                        </div>

                        <div class="mb-4">

                            <label class="form-label fw-bold">
                                Password
                            </label>

                            <input type="password"
                                   name="password"
                                   class="form-control"
                                   required>

                        </div>

                        <button type="submit"
                                name="login"
                                class="btn btn-danger w-100">
                            Login
                        </button>

                    </form>

                    <hr>

                    <p class="text-center mb-0">

                        Belum punya akun?

                        <a href="register.php"
                           class="text-danger fw-bold text-decoration-none">
                            Daftar Disini
                        </a>

                    </p>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>
<?php
include "koneksi.php";

$id_kamar = $_GET['id'];

if(isset($_POST['simpan'])){

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $hp = $_POST['hp'];
    $email = $_POST['email'];

    mysqli_query($conn,"
    INSERT INTO penyewa
    (nama,alamat,no_hp,email)
    VALUES
    ('$nama','$alamat','$hp','$email')
    ");

    $id_penyewa = mysqli_insert_id($conn);

    mysqli_query($conn,"
    INSERT INTO pemesanan
    (id_penyewa,id_kamar,tanggal_pesan,status_pemesanan)
    VALUES
    ($id_penyewa,$id_kamar,CURDATE(),'Pending')
    ");

    echo "<script>
    alert('Pemesanan berhasil');
    window.location='kamar.php';
    </script>";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Form Pemesanan Kamar</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body style="
background: linear-gradient(135deg,#ffe4f1,#ffd6ec,#ffc1e3);
min-height:100vh;
font-family:'Segoe UI',sans-serif;
">

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-md-8 col-lg-6">

            <div class="card border-0 shadow-lg rounded-4">

                <div class="card-body p-4">

                    <h2 class="text-center text-danger mb-3">
                        🌸 Form Pemesanan Kamar 🌸
                    </h2>

                    <p class="text-center text-secondary mb-4">
                        Lengkapi data berikut untuk melakukan pemesanan kamar.
                    </p>

                    <form method="POST">

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Nama Lengkap
                            </label>
                            <input type="text"
                                   name="nama"
                                   class="form-control"
                                   required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Alamat
                            </label>
                            <textarea name="alamat"
                                      class="form-control"
                                      rows="3"
                                      required></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Nomor HP
                            </label>
                            <input type="text"
                                   name="hp"
                                   class="form-control"
                                   required>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold">
                                Email
                            </label>
                            <input type="email"
                                   name="email"
                                   class="form-control"
                                   required>
                        </div>

                        <div class="d-grid gap-2">

                            <a href="pemesanan.php"
                                name="simpan"
                               class="btn btn-danger">
                               🏠 Pesan Sekarang
                            </a>

                            <button type="submit"
                                    name="simpan"
                                    class="btn btn-danger">
                                🏠 Pesan Sekarang
                            </button>

                            <a href="kamar.php"
                               class="btn btn-secondary">
                               ← Kembali
                            </a>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>
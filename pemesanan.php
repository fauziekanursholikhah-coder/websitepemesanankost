<?php
include "koneksi.php";

if(isset($_POST['simpan'])){

    $nama_penyewa = $_POST['nama_penyewa'];
    $nominal      = $_POST['nominal'];
    $bulan        = $_POST['bulan'];
    $tanggal      = $_POST['tanggal'];
    $status       = $_POST['status'];

    mysqli_query($conn,"
        INSERT INTO pemesanan
        (nama_penyewa, nominal, bulan, tanggal_bayar, status)
        VALUES
        ('$nama_penyewa','$nominal','$bulan','$tanggal','$status')
    ");

    echo "<script>
        alert('Data pembayaran berhasil disimpan!');
        window.location='pemesanan.php';
    </script>";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Pembayaran Kost</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    background: linear-gradient(135deg,#ffe4f1,#ffd6ec,#ffc1e3);
    min-height:100vh;
    font-family:'Segoe UI',sans-serif;
}

.card-pembayaran{
    background:white;
    border:none;
    border-radius:25px;
    box-shadow:0 10px 30px rgba(255,105,180,.25);
}

.judul{
    background:linear-gradient(45deg,#ff4f9f,#ff85c1);
    color:white;
    padding:18px;
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
    transform:scale(1.03);
    color:white;
}

.btn-cetak{
    background:#ffb6d9;
    border:none;
    color:#8b004f;
    font-weight:bold;
}
</style>

</head>
<body>

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-md-7">

            <div class="card card-pembayaran">

                <div class="judul">
                    💖 PEMBAYARAN 💖
                </div>

                <div class="card-body p-4">

                    <form method="POST">

                        <div class="mb-3">
                            <label class="fw-bold">
                                Nama Penyewa
                            </label>

                            <select name="nama_penyewa"
                                    class="form-select"
                                    required>

                                <option value="">
                                    ▼ Pilih Penyewa
                                </option>

                                <?php
                                $data = mysqli_query($conn,"SELECT * FROM penyewa");

                                while($d = mysqli_fetch_array($data)){
                                    echo "
                                    <option value='$d[nama]'>
                                        $d[nama]
                                    </option>";
                                }
                                ?>

                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="fw-bold">
                                Nominal
                            </label>

                            <input type="number"
                                   name="nominal"
                                   class="form-control"
                                   placeholder="Masukkan nominal pembayaran"
                                   required>
                        </div>

                        <div class="mb-3">
                            <label class="fw-bold">
                                Bulan
                            </label>

                            <select name="bulan"
                                    class="form-select">

                                <option>Januari</option>
                                <option>Februari</option>
                                <option>Maret</option>
                                <option>April</option>
                                <option>Mei</option>
                                <option>Juni</option>
                                <option selected>Juli</option>
                                <option>Agustus</option>
                                <option>September</option>
                                <option>Oktober</option>
                                <option>November</option>
                                <option>Desember</option>

                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="fw-bold">
                                Tanggal Bayar
                            </label>

                            <input type="date"
                                   name="tanggal"
                                   class="form-control"
                                   value="<?php echo date('Y-m-d'); ?>">
                        </div>

                        <div class="mb-4">
                            <label class="fw-bold">
                                Status
                            </label>

                            <select name="status"
                                    class="form-select">

                                <option value="Lunas">
                                    Lunas
                                </option>

                                <option value="Belum Lunas">
                                    Belum Lunas
                                </option>

                            </select>
                        </div>

                        <div class="d-flex gap-3">

                            <button type="submit"
                                    name="simpan"
                                    class="btn btn-pink flex-fill">
                                💾 Simpan
                            </button>

                            <button type="button"
                                    onclick="window.print()"
                                    class="btn btn-cetak flex-fill">
                                🖨 Cetak
                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>
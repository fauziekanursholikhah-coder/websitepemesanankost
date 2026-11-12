<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Pembayaran - Kost Umik Endang</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

<style>

body{
    background:#fff5fa;
    font-family:Arial, Helvetica, sans-serif;
}

.navbar{
    background:linear-gradient(90deg,#ff7eb3,#ff4f8b);
}

.navbar-brand{
    color:white;
    font-weight:bold;
}

.container{
    margin-top:40px;
}

.card{
    border:none;
    border-radius:20px;
    box-shadow:0 8px 20px rgba(255,105,180,.2);
    transition:.3s;
}

.card:hover{
    transform:translateY(-5px);
}

.card-header{
    background:#ff4f8b;
    color:white;
    font-weight:bold;
    border-radius:20px 20px 0 0 !important;
}

.bank-logo{
    font-size:45px;
    color:#ff4f8b;
}

.nomor{
    font-size:20px;
    font-weight:bold;
    color:#333;
}

.nama{
    color:#666;
}

.btn-copy{
    background:#ff4f8b;
    color:white;
    border:none;
}

.btn-copy:hover{
    background:#ff2f73;
    color:white;
}

</style>

</head>
<body>

<nav class="navbar">
    <div class="container-fluid">
        <span class="navbar-brand">
            <i class="bi bi-wallet2"></i>
            Pembayaran Kost Umik Endang
        </span>

        <a href="index.php" class="btn btn-light">
            <i class="bi bi-house-fill"></i>
            Dashboard
        </a>
    </div>
</nav>

<div class="container">

    <h2 class="text-center mb-4 text-danger">
        💳 Metode Pembayaran
    </h2>

    <div class="row g-4">

        <!-- BCA -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-header text-center">
                    BANK BCA
                </div>

                <div class="card-body text-center">

                    <i class="bi bi-bank bank-logo"></i>

                    <h5 class="mt-3">Bank BCA</h5>

                    <div class="nomor">
                        1234567890
                    </div>

                    <div class="nama">
                        a.n. Umik Endang
                    </div>

                    <button class="btn btn-copy mt-3"
                    onclick="copyText('1234567890')">

                        Salin Nomor Rekening

                    </button>

                </div>
            </div>
        </div>

        <!-- BRI -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-header text-center">
                    BANK BRI
                </div>

                <div class="card-body text-center">

                    <i class="bi bi-bank bank-logo"></i>

                    <h5 class="mt-3">Bank BRI</h5>

                    <div class="nomor">
                        9876543210
                    </div>

                    <div class="nama">
                        a.n. Umik Endang
                    </div>

                    <button class="btn btn-copy mt-3"
                    onclick="copyText('9876543210')">

                        Salin Nomor Rekening

                    </button>

                </div>
            </div>
        </div>

        <!-- Mandiri -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-header text-center">
                    BANK MANDIRI
                </div>

                <div class="card-body text-center">

                    <i class="bi bi-bank bank-logo"></i>

                    <h5 class="mt-3">Bank Mandiri</h5>

                    <div class="nomor">
                        1122334455
                    </div>

                    <div class="nama">
                        a.n. Umik Endang
                    </div>

                    <button class="btn btn-copy mt-3"
                    onclick="copyText('1122334455')">

                        Salin Nomor Rekening

                    </button>

                </div>
            </div>
        </div>

        <!-- DANA -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-header text-center">
                    DANA
                </div>

                <div class="card-body text-center">

                    <i class="bi bi-phone bank-logo"></i>

                    <h5 class="mt-3">DANA</h5>

                    <div class="nomor">
                        081234567890
                    </div>

                    <div class="nama">
                        a.n. Umik Endang
                    </div>

                    <button class="btn btn-copy mt-3"
                    onclick="copyText('081234567890')">

                        Salin Nomor

                    </button>

                </div>
            </div>
        </div>

        <!-- OVO -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-header text-center">
                    OVO
                </div>

                <div class="card-body text-center">

                    <i class="bi bi-phone bank-logo"></i>

                    <h5 class="mt-3">OVO</h5>

                    <div class="nomor">
                        081234567890
                    </div>

                    <div class="nama">
                        a.n. Umik Endang
                    </div>

                    <button class="btn btn-copy mt-3"
                    onclick="copyText('081234567890')">

                        Salin Nomor

                    </button>

                </div>
            </div>
        </div>

        <!-- GoPay -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-header text-center">
                    GOPAY
                </div>

                <div class="card-body text-center">

                    <i class="bi bi-phone bank-logo"></i>

                    <h5 class="mt-3">GoPay</h5>

                    <div class="nomor">
                        081234567890
                    </div>

                    <div class="nama">
                        a.n. Umik Endang
                    </div>

                    <button class="btn btn-copy mt-3"
                    onclick="copyText('081234567890')">

                        Salin Nomor

                    </button>

                </div>
            </div>
        </div>

    </div>

</div>

<script>

function copyText(text){

    navigator.clipboard.writeText(text);

    alert("Nomor berhasil disalin : " + text);

}

</script>

</body>
</html>
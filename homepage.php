<?php
        session_start();
        if (!$_SESSION['isLoggedIn']) {
            header("location: login.php");
            exit();
        }
        include "koneksi.php";
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h2 class="card-title text-center">Halo, <?php echo $_SESSION['username']; ?>!</h2>
                        <p class="card-text text-center">Stock Barang Sembako Jaya</p>
                        
                        <div class="text-center mb-3">
                            <p>Username Anda: <strong><?php echo $_SESSION['username']; ?></strong></p>
                            <p>User ID Anda: <strong><?php echo $_SESSION['userid']; ?></strong></p>
                        </div>

                        <div class="text-center">
                            <h5 class="center">
                                <span id="tanggal"></span> <br>
                                <span id="jam"></span>
                            </h5>
                            <a href="logout.php" class="btn btn-danger btn-lg">Log Out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        window.setTimeout("tampilWaktu()", 1000);

        function tampilWaktu() {
            var waktu = new Date();
            var bulan = waktu.getMonth() + 1;

            setTimeout("tampilWaktu()", 1000);
            document.getElementById("tanggal").innerHTML = 
            waktu.getDate() + "/" + bulan + "/" + waktu.getFullYear();
            document.getElementById("jam").innerHTML =
            waktu.getHours() + 
            ":" + 
            waktu.getMinutes() + 
            ":" + 
            waktu.getSeconds(); 
        }
    </script>
</body>
</html>
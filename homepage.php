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
    <header class="bg-dark text-white py-3">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                <img src="img/Buku.png" alt="Logo" class="me-2" style="width: 40px;">
                <span class="fw-bold">Perpustakaan</span>
            </div>
            <nav class="d-flex gap-3">
                <a href="#" class="text-white text-decoration-none">Tentang Kami</a>
                <a href="#" class="text-white text-decoration-none">List Buku</a>
                <a href="#" class="text-white text-decoration-none">Bookmark</a>
            </nav>
        </div>
    </header>

    <!-- <div class="row justify-content-center">
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
        </div> -->

    <div class="container mt-5">
        <a href="input.php" class="btn btn-success mb-3">Tambah Data</a>
        <a href="logout.php"> <button class="btn btn-danger mb-3">keluar</button></a>
        <?php
        $dbh = $koneksi->query("SELECT * FROM buku Where isdel = 0");

        ?>
        <div class="row">
            <table class="table table-bordered" border="1">
                <thead>
                    <tr class="table-success">
                        <th scope="col">No</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Tahun Terbit</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    while ($bukus = $dbh->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                        <tr>
                            <th scope="row"><?php echo $no ?></th>
                            <td><?php echo $bukus['judul'] ?></td>
                            <td><?php echo $bukus['tahun'] ?></td>
                            <td>
                                <!-- <a class="btn btn-primary" href="edit.php?id=<?php echo $bukus['id'] ?>">Edit</a>
                                <a class="btn btn-danger" href="delete.php?id=<?php echo $bukus['id'] ?>">Hapus</a> -->

                            </td>
                        </tr>

                    <?php

                        $no++;
                    }
                    ?>
                </tbody>
            </table>


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
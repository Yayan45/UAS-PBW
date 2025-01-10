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

    <!-- CDN BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CDN JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header class="bg-dark text-white py-3">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                <img src="img/Buku.png" alt="Logo" class="me-2" style="width: 40px;">
                <span class="fw-bold">Perpustakaan</span>
            </div>
            <nav class="d-flex gap-3">
                <a href="homepage.php" class="text-white text-decoration-none">Beranda</a>
                <a href="inputbuku.php" class="text-white text-decoration-none">Input Buku</a>
                <a href="inputpenulis.php" class="text-white text-decoration-none">Input Penulis</a>
                <a href="datapenulis.php" class="text-white text-decoration-none">Data Penulis</a>
            </nav>
            <div class="d-flex">
                <a href="logout.php" class="btn btn-light">Logout</a>
            </div>

        </div>
    </header>

    <div class="container mt-5">

        <div class="text-end waktu">
            <h5 class="center">
                <span id="tanggal"></span> <br>
                <span id="jam"></span>
            </h5>
        </div>
        <?php
        $dbh = $koneksi->query("SELECT id_buku, judul, tahun, penulis FROM buku NATURAL JOIN penulis WHERE buku.isdel = 0");

        ?>
        <div class="row">
            <h1>Data Buku Perpustakaan</h1>
            <table class="table table-bordered" border="1">
                <thead>
                    <tr class="table-success">
                        <th scope="col">No</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Tahun Terbit</th>
                        <th scope="col">Penulis</th>
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
                            <td><?php echo $bukus['penulis'] ?></td>
                            <td>
                                <a class="btn btn-primary" href="edit.php?id=<?php echo $bukus['id_buku'] ?>">Edit</a>
                                <a class="btn btn-danger" href="delete.php?id=<?php echo $bukus['id_buku'] ?>">Hapus</a>

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
    <script>
        $(document).ready(function() {

            var username = "<?php echo $_SESSION['username']; ?>";
            var userid = "<?php echo $_SESSION['userid']; ?>";

            alert('Selamat Datang ' + username + '');
        });
    </script>
</body>

</html>
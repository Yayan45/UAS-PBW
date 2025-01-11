<?php

include "koneksi.php";
session_start();

if (!$_SESSION['isLoggedIn']) {
    header("Location: login.php");
    exit;
}

$id = $_GET['id'];

$dbh = $koneksi->prepare("SELECT * FROM penulis WHERE id_penulis = ?");
$dbh->execute([$id]);

if ($dbh->rowCount() == 1) {
    $data = $dbh->fetch(PDO::FETCH_ASSOC);
?>

    <form method="POST" action="aksieditpenulis.php" class="container" autocomplete="off">
        <h1 class="mt-5">Edit Data Penulis</h1>
        <div class="form-group">
            <label for="nama_penulis">nama penulis</label>
            <input type="text" class="form-control" id="nama_penulis" name="penulis" value="<?php echo $data['penulis'] ?>">
        </div>
        <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="text" class="form-control" name="tgl_lahir" value="<?php echo $data['tgl_lahir'] ?>">
        </div>
        <div class="form-group">
            <label for="negara">Negara</label>
            <input type="text" class="form-control" name="negara" value="<?php echo $data['negara'] ?>">
        </div>
        <div class="form-group">
            <label for="gendre">Gendre</label>
            <input type="text" class="form-control" name="gendre" value="<?php echo $data['gendre'] ?>">
        </div>
        <input type="hidden" name="id" value="<?php echo $id; ?>"> <!-- Tambahkan input hidden untuk ID -->
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="datapenulis.php" class="btn btn-danger">Kembali</a>
    </form>
<?php
} else {
    echo "<script>alert('Data Tidak Di Temukan')</script>";
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Input Data</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>

<body>

</body>

</html>
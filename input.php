<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    
<div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title text-center">Input Penulis</h5>
                        <form method="POST" action="proses_penulis.php">
                            <div class="form-group mb-3">
                                <label for="exampleFormControlInput1">Nama Penulis</label>
                                <input type="text" name="penulis" class="form-control" id="exampleFormControlInput1" >
                            </div>
                            <div class="form-group mb-3">
                                <label for="exampleFormControlSelect1">Tanggal Lahir</label>
                                <input type="date" name="tgl_lahir" class="form-control" id="exampleFormControlInput1" >
                            </div>
                            <div class="form-group mb-3">
                                <label for="exampleFormControlSelect1">Asal Negara</label>
                                <input type="text" name="negara" class="form-control" id="exampleFormControlInput1" >
                            </div>
                            <div class="form-group mb-3">
                                <label for="exampleFormControlSelect1">Gendre</label>
                                <input type="text" name="gendre" class="form-control" id="exampleFormControlInput1" >
                            </div>
                            <button type="submit" class="btn btn-primary"
                            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                            Simpan
                            </button>
                            <a href="homepage.php" class="btn btn-danger">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title text-center">Input Buku</h5>
                        <form method="POST" action="proses_buku.php">
                            <div class="form-group mb-3">
                                <label for="exampleFormControlInput1">Nama Buku</label>
                                <input type="text" name="judul" class="form-control" id="exampleFormControlInput1" >
                            </div>
                            <div class="form-group mb-3">
                                <label for="exampleFormControlSelect1">Tahun Terbit</label>
                                <input type="text" name="tahun" class="form-control" id="exampleFormControlInput1" >
                            </div>
                            <div class="form-group mb-3">
                                <label for="exampleFormControlSelect1">Penulis</label>
                                <select id="id_penulis" name="id_penulis" required>
                                <option value="">Pilih Penulis</option>
                                <?php
                                include 'koneksi.php';
                                $penulis = $koneksi->query("SELECT id_penulis,penulis FROM penulis");
                                while ($row = $penulis->fetch(PDO::FETCH_ASSOC)) {
                                    echo "<option value='{$row['id_penulis']}'>{$row['penulis']}</option>";
                                }
                                ?>
                            </select>
                            </div>
                            <button type="submit" class="btn btn-primary"
                            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                            Simpan
                            </button>
                            <a href="homepage.php" class="btn btn-danger">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>

</body>
</html>
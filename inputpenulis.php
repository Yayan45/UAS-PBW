<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Input Penulis</title>
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


    <div class="row justify-content-center mt-5">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title text-center">Masukan Data Penulis</h5>
                    <form method="POST" action="proses_penulis.php">
                        <div class="form-group mb-3">
                            <label for="exampleFormControlInput1">Nama Penulis</label>
                            <input type="text" name="penulis" class="form-control" id="exampleFormControlInput1">
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleFormControlSelect1">Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" class="form-control" id="exampleFormControlInput1">
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleFormControlSelect1">Asal Negara</label>
                            <input type="text" name="negara" class="form-control" id="exampleFormControlInput1">
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleFormControlSelect1">Gendre</label>
                            <input type="text" name="gendre" class="form-control" id="exampleFormControlInput1">
                        </div>
                        <button type="submit" class="btn btn-primary">
                            Simpan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
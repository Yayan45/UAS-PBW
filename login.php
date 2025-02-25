<?php
session_start();
if(isset($_SESSION['isLoggedIn']))
{
if ($_SESSION['isLoggedIn']) 
{
    header("location: homepage.php");
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body style="background-image: url(img/bg1.jpg);">
<header class="bg-dark text-white py-3">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                <img src="img/Buku.png" alt="Logo" class="me-2" style="width: 40px;">
                <span class="fw-bold">Ruang Baca Lentera</span>
            </div>
            <nav class="d-flex gap-3">
                <a href="index.html" class="text-white text-decoration-none">Home</a>
                <a href="ListBuku.html" class="text-white text-decoration-none ">List Buku</a>
            </nav>
        </div>
    </header>
    <div class="row w-100 h-100">
        <div class="container d-flex justify-content-center align-items-center vh-100">
            <div class="card shadow p-4" style="width: 400px;">
                <h3 class="text-center mb-4">Login</h3>
            <form action="aksi_login.php" method="post">
                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary w-100 mt-3 ">Submit</button>
            </form>
        </div>
    </div>
    </div>
</body>
</html>
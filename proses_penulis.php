<?php 
    include "koneksi.php";
    session_start();

    if (!$_SESSION['isLoggedIn']) {
        header("location: login.php");
        exit();
    } 

    $penulis = $_POST['penulis'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $negara = $_POST['negara'];
    $gendre = $_POST['gendre'];


    $dbh = $koneksi->prepare("INSERT INTO penulis(penulis, tgl_lahir, negara, gendre) VALUES (?,?,?,?)");

    $dbh->execute([$penulis,$tgl_lahir,$negara,$gendre]);

    header("location: homepage.php");
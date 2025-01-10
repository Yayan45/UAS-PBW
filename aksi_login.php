<?php
include "koneksi.php";

$mail = $_POST['email'];
$pass = $_POST['password'];

$dbh = $koneksi->query("select * from user where email = '" . $mail . "'");

if ($dbh->rowcount() == 1) {
    $user = $dbh->fetch(PDO::FETCH_ASSOC);

    if (password_verify($pass, $user['password'])) {
        session_start();
        $_SESSION['username'] = $user['username'];
        $_SESSION['userid'] = $user['id'];
        $_SESSION['isLoggedIn'] = true;
        header("location: homepage.php");
    } else {
        echo "<script>alert('Periksa email dan password Anda'); window.location.href='login.php';</script>";
    }
} else {
    echo "<script>alert('User tidak ditemukan'); window.location.href='login.php';</script>";
}

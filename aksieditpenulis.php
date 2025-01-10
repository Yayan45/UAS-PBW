<?php
include "koneksi.php";
session_start();

if (!$_SESSION['isLoggedIn']) {
    header("Location: login.php");
}
$id = $_POST['id'];
$penulis = $_POST['penulis'];
$tgl_lahir = $_POST['tgl_lahir'];
$negara = $_POST['negara'];
$gendre = $_POST['gendre'];

"UPDATE penulis SET penulis = ?, tgl_lahir = ?, negara =?, gendre = ? WHERE id_penulis = ?";

$dbh = $koneksi->prepare("UPDATE penulis SET penulis = ?, tgl_lahir = ?, negara = ?, gendre = ? WHERE id_penulis = ?");
$dbh->execute([$penulis, $tgl_lahir, $negara, $gendre, $id]);


header("Location: datapenulis.php");
exit();

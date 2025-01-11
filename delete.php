<?php

include "koneksi.php";
session_start();

if (!$_SESSION['isLoggedIn']) {
    header("Location : login.php");
}

$id = $_GET['id'];

$dbh = $koneksi->prepare("UPDATE buku SET isdel = ?, delete_by = ?, delete_at = ? WHERE id_buku = ?");
$dbh->execute(
    [
        1,
        $_SESSION['userid'],
        date("Y-m-d H:i:s"),
        $id
    ]
);

header("Location: homepage.php");
exit();

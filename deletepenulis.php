<?php

include "koneksi.php";
session_start();

if (!$_SESSION['isLoggedIn']) {
    header("Location : login.php");
}

$id = $_GET['id'];

$dbh = $koneksi->prepare("DELETE FROM penulis  WHERE id_penulis = ?");
$dbh->execute(
    [
        $id
    ]
);

header("Location: homepage.php");
exit();

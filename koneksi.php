<?php

try {
    $koneksi = new PDO("mysql:host=localhost;dbname=perpustakaan", 'root', '');
} catch (PDOException $e) {
    echo "gagal", $e->getMessage();
}

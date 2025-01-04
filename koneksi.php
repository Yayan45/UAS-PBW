<?php 

try{
    $koneksi = new PDO("mysql:host=localhost;dbname=toko",'root','');
}
catch(PDOException $e) {    
    echo "gagal",$e->getMessage();
}
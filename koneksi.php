<?php

$servername = "localhost";
$username = "root";
$password = "";

$koneksi = new mysqli($servername, $username, $password);

if($koneksi->connect_error){
    die("Gagal Terkoneksi" . $koneksi->connect_error);
}

echo "Berhasil terhubung ke database";

?>
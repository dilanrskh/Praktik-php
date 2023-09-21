<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "praktikphp";

$koneksi = mysqli_connect($servername, $username, $password, $database);

if(mysqli_connect_error()){
    echo "Gagal terhubung ke server" . mysqli_connect_error();
}

// echo "Berhasil terhubung ke server";

?>
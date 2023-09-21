<?php

// Ini bagian proses input data
// Nambah data itu pake method POST
// Kalau ambil atau liat data pake method GET

include "koneksicrud.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$umur = $_POST['umur'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$no_telp = $_POST['no_telp'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi, "INSERT INTO users values ('$id', '$nama', '$umur', '$jenis_kelamin', '$no_telp', '$alamat')");

header("location:table.php");

?>
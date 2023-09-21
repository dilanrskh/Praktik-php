<?php

// Ini buat proses edit

include "koneksicrud.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$umur = $_POST['umur'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$no_telp = $_POST['no_telp'];
$alamat = $_POST['alamat'];

$data = mysqli_query($koneksi, "UPDATE users SET nama='$nama', umur='$umur', jenis_kelamin='$jenis_kelamin', no_telp='$no_telp', alamat='$alamat' where id='$id'");

header("location:table.php");

?>
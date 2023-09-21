<?php

include 'koneksi.php';

$db = "praktikphp";

$create = "CREATE database $db";

if($koneksi->query($create) === true){
    echo "Database $db telah berhasil dibuat";
}else{
    echo "Gagal membuat database";
}

$koneksi->close();
?>
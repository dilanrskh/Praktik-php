<?php

include 'koneksicrud.php';

$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM users where id='$id'");

header("location:table.php");

?>
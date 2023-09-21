<?php

include 'koneksicrud.php';

$id = $_GET['id'];

$data = mysqli_query($koneksi, "SELECT * FROM users where id='$id'");
while ($user = mysqli_fetch_array($data)) {

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Data User</title>
    </head>

    <body>
        <h1>Form Edit Data User</h1>

        <form action="crud-u.php" method="post">

            <input type="hidden" name="id" value="<?php print $user['id']; ?>" />

            <label for="nama">Nama Lengkap Anda</label>
            <br>
            <input type="text" id="nama" name="nama" value="<?php print $user['nama'];  ?>" />
            <br>


            <label for="umur">Umur Anda</label>
            <br>
            <input type="text" id="umur" name="umur" value="<?php print $user['umur'];  ?>" />
            <br>


            <label for="jenis_kelamin">Jenis Kelamin Anda</label>
            <br>
            <input type="text" id="jenis_kelamin" name="jenis_kelamin" value="<?php print $user['jenis_kelamin'];  ?>" />
            <br>


            <label for="no_telp">Nomor Telepon Anda</label>
            <br>
            <input type="text" id="no_telp" name="no_telp" value="<?php print $user['no_telp'];  ?>" />
            <br>

            <label for="alamat">Alamat Anda</label>
            <br>
            <input type="text" id="alamat" name="alamat" value="<?php print $user['alamat'];  ?>" />
            <br>

            <button type="submit">Simpan Perubahan</button>
        </form>

    <?php
}
    ?>
    </body>

    </html>
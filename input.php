<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Bootcamp</title>
</head>
<style>
    h1 {
        text-align: center;
        font-size: 25px;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        font-weight: 300;
        margin-bottom: 30px;
    }

    .form {
        justify-content: center;
        margin: auto;
        padding: 30px 40px;
        width: 25%;
        border: 2px solid black;
        text-align: start;
    }

    input {
        margin-top: 8px;
        margin-bottom: 8px;
        border-color: gray;
        padding: 5px;
    }
</style>

<body>
    <h1>Form Peserta Bootcamp</h1>

    <div class="form">
        <form action="crud-c.php" method="post">

            <label for="id">Masukkan ID Anda</label>
            <br>
            <input type="text" id="id" name="id" />
            <br>

            <label for="nama">Masukkan Nama Lengkap Anda</label>
            <br>
            <input type="text" id="nama" name="nama" />
            <br>

            <label for="umur">Masukkan Umur Anda</label>
            <br>
            <input type="text" id="umur" name="umur" />
            <br>

            <label for="jenis_kelamin">Masukkan Jenis Kelamin Anda</label>
            <br>
            <input type="text" id="jenis_kelamin" name="jenis_kelamin" />
            <br>

            <label for="no_telp">Masukkan Nomor Telepon Anda</label>
            <br>
            <input type="text" id="no_telp" name="no_telp" />
            <br>

            <label for="alamat">Masukkan Alamat Anda</label>
            <br>
            <input type="text" id="alamat" name="alamat" />
            <br><br>


            <button type="submit">Simpan Data</button>
        </form>
    </div>

</body>

</html>
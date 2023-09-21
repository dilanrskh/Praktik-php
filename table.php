<?php
include 'koneksicrud.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktik</title>
</head>

<body>
    <style>
        table {
            border-collapse: collapse;
            border: 1px solid black;
            width: 80%;
            margin: auto;
            padding: auto;
            margin-top: 20px;
        }

        th {
            background-color: lightpink;
            color: black;
            padding: 10px;
        }

        td {
            padding: 8px;

        }

        .no {
            text-align: center;
        }

        .tc {
            text-align: center;
        }

        .option {
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .edit {
            background-color: grey;
            border: none;
            padding: 6px 8px;
            border-radius: 5px;
            margin-right: 10px;
        }

        .delete {
            background-color: red;
            border: none;
            padding: 6px 8px;
            border-radius: 5px;
            margin-right: 10px;
        }

        .detail {
            background-color: greenyellow;
            border: none;
            padding: 6px 8px;
            border-radius: 5px;
            margin-right: 10px;
        }
    </style>
    </head>

    <h1 style="text-align: center; margin-bottom: 40px;">Praktek HTML dan PHP</h1>

    <table border="1">
        <tr style="font-weight: bold; background-color:antiquewhite; ">
            <td colspan="5" style="text-align: right ;"><a href="datalk.php">Data Laki Laki</a></td>
            <td style="text-align: right ;"><a href="datapr.php">Data Perempuan</a></td>
            <td style="text-align: right ;"><a href="input.php">Tambahkan Data</a></td>
        </tr>
        <tr>
            <th width="5%">No</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Jenis Kelamin</th>
            <th>Nomor Telepon</th>
            <th>Alamat</th>
            <th>Option</th>
        </tr>

        <?php

        $data = mysqli_query($koneksi, "SELECT * FROM users");
        // $boot = mysqli_query($koneksi, "SELECT * FROM bootcamp where no_bootcamp='$no_bootcamp'");
        while ($user = mysqli_fetch_array($data)) {

        ?>

            <tr>
                <td> <?php print $user['id']; ?> </td>
                <td> <?php print $user['nama']; ?> </td>
                <td> <?php print $user['umur']; ?> </td>
                <td> <?php print $user['jenis_kelamin']; ?> </td>
                <td> <?php print $user['no_telp']; ?> </td>
                <td> <?php print $user['alamat']; ?> </td>
                <td class="option">
                    <a href="edit.php?id=<?php print $user['id']; ?>" class="edit">Edit</a>
                    <a href="crud-d.php?id=<?php print $user['id']; ?>" onclick="return confirm('Yaqueen mau hapus data ini ?')" class="delete">Delete</a>
                    <a href="detail.php?id=<?php print $user['id'] ?>" class="detail">Detail</a>

                </td>
            </tr>
        <?php
        }

        ?>

    </table>

</body>

</html>
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
            background-color: cadetblue;
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

    <h1 style="text-align: center; margin-bottom: 40px;">Detail Bootcamp Siang</h1>

    <table border="1">
        <tr style="font-weight: bold; background-color:antiquewhite; ">
            <td colspan="4" style="text-align: right ;"><a href="siang.php">Kelas Siang</a></td>
            <td colspan="3" style="text-align: right ;"><a href="pagi.php">Kelas Pagi</a></td>
        </tr>
        <tr>
            <th width="5%">No</th>
            <th>Nomor Bootcamp</th>
            <th>Nama Peserta</th>
            <th>Nama Bootcamp</th>
            <th>Jadwal Kelas</th>
        </tr>

        <?php

        $boot = mysqli_query($koneksi, "SELECT users.id, users.nama, bootcamp.no_bootcamp, bootcamp.bootcamp, bootcamp.jadwal_kelas from users inner join bootcamp on users.id=bootcamp.id where jadwal_kelas like '%Pagi%'");
        while ($user = mysqli_fetch_array($boot)) {

        ?>

            <tr>
                <td> <?php print $user['id']; ?> </td>
                <td> <?php print $user['no_bootcamp']; ?> </td>
                <td> <?php print $user['nama']; ?> </td>
                <td> <?php print $user['bootcamp']; ?> </td>
                <td> <?php print $user['jadwal_kelas']; ?> </td>
            </tr>
        <?php
        }

        ?>

    </table>

</body>

</html>
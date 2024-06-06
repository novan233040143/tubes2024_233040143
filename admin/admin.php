<?php
require 'functions.php';
$admins = query("SELECT * FROM admins")
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Administrator</title>

    <style>
        #spinner {
            display: none;
        }
    </style>
</head>

<body>


    <a href="./logout.php">Logout</a>

    <h1>Daftar User</h1>


    <a href="./tambah.php">Tambah data pelanggan</a>
    <br><br>

    <form action="" method="get">
        <input type="search" name="keyword" placeholder="Cari disini..." size="40" autocomplete="off" id="keyword">
        <button type="submit" name="cari" id="cari">Cari</button>
    </form>

    <br>

    <img src="img/spinner.gif" width="30" id="spinner">

    <div id="container">
        <table border="1" cellpadding="10" cellspacing="0">


            <tr>
                <th>No.</th>
                <th>Aksi</th>
                <th>Gambar</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Asal Kota</th>
            </tr>

            <?php if (empty($admins)) : ?>
                <tr>
                    <td colspan="7" align="center">Data pelanggan tidak di temukan</td>
                </tr>
            <?php endif; ?>

            <?php $i = 1; ?>
            <?php foreach ($admins as $row) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td>
                        <a href="ubah.php">ubah</a>
                        <a href="hapus.php" onclick="return confirm('yakin?');">hapus</a>
                    </td>
                    <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
                    <td><?= $row["nik"]; ?></td>
                    <td><?= $row["nama"]; ?></td>
                    <td><?= $row["email"]; ?></td>
                    <td><?= $row["asalKota"]; ?></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>






        </table>






</body>

</html>

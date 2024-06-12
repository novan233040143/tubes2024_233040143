<?php
require 'functions.php';
$event = query("SELECT * FROM event");
if (isset($_POST["cari"])) {
    $event = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Administrator</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>

<body>
    <h1>Daftar Event</h1>


    <a href="tambah.php">Tambah data Event</a>
    <br><br>

    <form action="" method="post">
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
                <th>Tanggal Event</th>
                <th>Jam Event</th>
                <th>Judul Event</th>
            </tr>

            <?php $i = 1; ?>
            <?php foreach ($event as $row) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td>
                        <a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a>
                        <a href="hapus.php?id=<?= $row['id']; ?>" onclick="return confirm('Konfirmasi Hapus');">Hapus</a>
                    </td>
                    <td><img src="../assets/<?= $row["gambar_event"]; ?>" width="50"></td>
                    <td><?= $row["tgl_event"]; ?></td>
                    <td><?= $row["jam_event"]; ?></td>
                    <td><?= $row["judul_event"]; ?></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>

        </table>

</body>

</html>
<?php

require 'functions.php';

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

    //cek apakah data berhasil di tambahkan atau tidak
    if (tambah($_POST) > 0) {
        echo "
        <script>
            alert('Data Berhasil Ditambahkan');
            document.location.href = 'admin.php';
        </script>";
    } else {
        echo "
        <script>
        alert('Data Gagal Ditambahkan');
        document.location.href = 'admin.php';
    </script>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data Event</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>

<body>
    <h1>Tambah data Event</h1>

    <form action="" method="post" enctype="multipart/form-data">

        <label>Gambar :</label>
        <input type="file" name="gambar_event">
        <label>Tanggal :</label>
        <input type="text" name="tgl_event" required>
        <label>Jam :</label>
        <input type="text" name="jam_event" required>
        <label>Judul :</label>
        <input type="text" name="judul_event" required>
        <button type="submit" name="submit">Submit</button>

    </form>



</body>

</html>
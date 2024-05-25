<?php
require 'functions.php';

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
    //ambil data dari tiap elemen dalam form
    $nik = $_POST["nik"];
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $asalkota = $_POST["asalkota"];
    $gambar = $_POST["gambar"];



    //cek apakah data berhasil di tambahkan atau tidak
    if (tambah($_POST) > 0) {
        echo "
        <script>
            alert('data berhasil ditabahkan!');
            document.loacation.href = 'admin.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('data gagal ditabahkan!');
        document.loacation.href = 'admin.php';
    </script>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data pelanggan</title>
</head>

<body>
    <h1>Tambah Data Pelanggan</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="nik">NIK :</label>
                <input type="text" name="nik" id="nik" required>
            </li>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="email">Email :</label>
                <input type="text" name="email" id="email" required>
            </li>
            <li>
                <label for="asalkota">Asal Kota :</label>
                <input type="text" name="asalkota" id="asalkota" required>
            </li>
            <li>
                <label for="gambar">Gambar :</label>
                <input type="text" name="gambar" id="gambar" required>
            </li>
            <li>
                <button type="submit" name="submit">Submit</button>
            </li>

        </ul>
    </form>



</body>

</html>
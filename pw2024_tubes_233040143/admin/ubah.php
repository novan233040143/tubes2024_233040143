<?php

require 'functions.php';

$id = $_GET["id"];


if( isset($_POST["ubah"]) ) {
        if( ubah($_POST) > 0 ) {
            echo "<script>
                    alert('Data Berhasil Diubah');
                    document.location.href = 'admin.php';
                  </script>";
        } else {
            echo "<script>
                    alert('Data Gagal Diubah');
                    document.location.href = 'admin.php';
            	  </script>";
    }
}

$event = query("SELECT * FROM event WHERE id = $id")[0];

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ubah Data Event</title>
	<link rel="stylesheet" href="../css/admin.css">
</head>
<body>
	<h1>Ubah Data Event</h1>
	<form action="" method="post">
		<input type="hidden" name="id" value="<?= $event["id"]; ?>">
		<input type="hidden" name="" value="<?= $event["gambar_event"]; ?>">
		<ul>
			<li>
				<label for="gambar">Gambar : </label>
				<input type="file" name="gambar_event">
			</li>
			<li>
				<label for="tanggal">Tanggal : </label>
				<input type="text" name="tgl_event" value="<?= $event["tgl_event"]; ?>">
			</li>
			<li>
				<label for="jam">Jam : </label>
				<input type="text" name="jam_event" value="<?= $event["jam_event"]; ?>">
			</li>
			<li>
				<label for="judul">Judul : </label>
				<input type="text" name="judul_event" value="<?= $event["judul_event"]; ?>">
			</li>
			<li>
				<button type="submit" name="ubah">Ubah Data</button>
			</li>
		</ul>
	</form>
</body>
</html>
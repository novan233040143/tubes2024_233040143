<?php
require 'functions.php';

$id = $_GET["id"];

if (hapus($id) > 0) {
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
        </script>
        ";
}

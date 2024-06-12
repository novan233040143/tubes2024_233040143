<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "pw2024_tubes_233040143");


function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function upload()
{

    global $conn;

    $nama_file = $_FILES['gambar_event']['name'];
    $tipe_file = $_FILES['gambar_event']['type'];
    $ukuran_file = $_FILES['gambar_event']['size'];
    $error = $_FILES['gambar_event']['error'];
    $tmp_file = $_FILES['gambar_event']['tmp_name'];

    // ketika tidak ada gambar yang dipilih

    if ($error == 4) {
        echo "<script>
             alert('pilih gambar terlebih dahulu');
            </script> ";
        return false;
    }


    // cek ekstensi file
    $daftar_gambar = ['jpg', 'jpeg', 'png'];
    $ekstensi_file = explode('.', $nama_file);
    $ekstensi_file = strtolower(end($ekstensi_file));
    if (!in_array($ekstensi_file, $daftar_gambar)) {
        echo "<script>
            alert('yang anda pilih bukan gambar!');
           </script> ";
        return false;
    }


    // cek type file
    if($tipe_file != 'image/jpeg' && $tipe_file != 'image/png' ) {
        echo "<script>
        alert('yang anda pilih bukan gambar!');
       </script> ";
       return false;
   }

    //  cek ukuran
    // maksimal 5MB = 5000000

    if ($ukuran_file > 5000000) {

        echo "<script>
        alert('ukuran gambar terlalu besar');
       </script> ";
       return false;

    }

    // lolos pengecekan 
    // siap upload file
    // generate nama file baru
    $nama_file_baru = uniqid();
    $nama_file_baru .= '.';
    $nama_file_baru .= $ekstensi_file;

    move_uploaded_file($tmp_file, '../assets/' . $nama_file_baru);


    return $nama_file_baru;


}

function tambah($data) {

    global $conn;

    $tanggal = htmlspecialchars($data["tgl_event"]);
    $jam = htmlspecialchars($data["jam_event"]);
    $judul = htmlspecialchars($data["judul_event"]);

    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    $query = "INSERT INTO event
                VALUES
                ('0', '$gambar', '$tanggal', '$jam', '$judul')
            ";


    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id) {

    global $conn;

    $query = "DELETE FROM event WHERE id = $id";
    
    mysqli_query( $conn, $query );

    return mysqli_affected_rows($conn); 
}


function ubah($data) {

    global $conn;

    $id = $data['id'];
    $gambar = htmlspecialchars($data['gambar_event']);
    $tgl = htmlspecialchars($data['tgl_event']);
    $jam = htmlspecialchars($data['jam_event']);
    $judul = htmlspecialchars($data['judul_event']);

    $query = "UPDATE event SET
                gambar_event = '$gambar',
                tgl_event = '$tgl',
                jam_event = '$jam',
                judul_event = '$judul'
              WHERE id = $id  
    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);     
}


function cari($keyword) {
    $query = "SELECT * FROM event
                WHERE
              judul_event LIKE '%$keyword%'
            ";
    return query($query);
}

?>


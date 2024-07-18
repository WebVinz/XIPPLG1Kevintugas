<?php
$koneksi = new mysqli('localhost', 'root', '', 'Pasien_db')
    or die(mysqli_error($koneksi));

if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];

    $koneksi->query("REPLACE INTO pasien (id, nama, jk, alamat) VALUES ('$id', '$nama', '$jk', '$alamat')")
        or die($koneksi->error);


    header('location:pasien.php');
    exit();
}

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];

    $koneksi->query("UPDATE pasien SET nama='$nama', jk='$jk', alamat='$alamat' WHERE id='$id'")
        or die($koneksi->error);

    header("location:pasien.php");
    exit();
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $koneksi->query("DELETE FROM pasien WHERE id='$id'")
        or die($koneksi->error);

    session_start();
    $_SESSION['deleted'] = true;

    header("location:pasien.php");
    exit();
}
?>

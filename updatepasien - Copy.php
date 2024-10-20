<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];

    $sql = "UPDATE pasien SET nama='$nama', jk='$jk', alamat='$alamat' WHERE id='$id'";

    if ($koneksi->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $koneksi->error;
    }

    $koneksi->close();
}
?>

<?php
function koneksi()
{
    $dbhost = "localhost";  // Tanda kutip dan titik koma sudah benar
    $dbuser = "root";       // Tambahkan tanda kutip pada 'root'
    $dbpass = "";           // Kosongkan password jika tidak ada, pastikan tanda kutip benar
    $dbname = "pasien_db";     // Tanda kutip sudah benar

    return mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);  // Koneksi ke database
}

function getTabelPasien()
{
    $link = koneksi();  // Panggil fungsi koneksi
    $query = "SELECT * FROM pasien";  // Query SQL
    $result = mysqli_query($link, $query);  // Eksekusi query
    
    if ($result) {  // Pastikan hasil query tidak false
        $hasil = mysqli_fetch_all($result, MYSQLI_ASSOC);  // Ambil semua data
        return $hasil;  // Kembalikan hasil
    } else {
        return [];  // Jika gagal, kembalikan array kosong
    }
}

function getTabelDokter()
{
    $link = koneksi();  // Panggil fungsi koneksi
    $query = "SELECT * FROM dokter";  // Query SQL
    $result = mysqli_query($link, $query);  // Eksekusi query
    
    if ($result) {  // Pastikan hasil query tidak false
        $hasil = mysqli_fetch_all($result, MYSQLI_ASSOC);  // Ambil semua data
        return $hasil;  // Kembalikan hasil
    } else {
        return [];  // Jika gagal, kembalikan array kosong
    }
}

function getTabelKunjungan()
{
    $link = koneksi();  // Panggil fungsi koneksi
    $query = "SELECT * FROM kunjungan";  // Query SQL
    $result = mysqli_query($link, $query);  // Eksekusi query
    
    if ($result) {  // Pastikan hasil query tidak false
        $hasil = mysqli_fetch_all($result, MYSQLI_ASSOC);  // Ambil semua data
        return $hasil;  // Kembalikan hasil
    } else {
        return [];  // Jika gagal, kembalikan array kosong
    }
}
?>

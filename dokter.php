<?php
include 'controller_pasien.php';
$no = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script>
        function hapus(id) {
            if (confirm('Yakin?')) {
                window.location.href = 'koneksi.php?idDokter=' + id;
            } else {
                return true;
            }
        }
    </script>
</head>
<body>
<div class="container">
<nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">App</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="./dokter.php">Dokter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./pasien.php">Pasien</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./kunjungan.php">Kunjungan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="card">
        <div class="card-header">
            <h3>Tabel Dokter</h3>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col">
                    <a href="tambahdokter.php" class="btn btn-primary btn-sm">Tambah Data</a>
                </div>
            </div>
            <table class="table table-striped table-hover table-sm">
                <head>
                    <tr>
                        <th>No</th>
                        <th>ID Dokter</th>
                        <th>Nama Dokter</th>
                        <th>Spesialisasi</th>
                        <th>No Telp</th>
                        <th>Action</th>
                    </tr>
                </head>
                <body>
                    <?php
                    foreach ($isiTabelDokter as $data) {
                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $data['idDokter']; ?></td>
                        <td><?= $data['nmDokter']; ?></td>
                        <td><?= $data['spesialisasi']; ?></td>
                        <td><?= $data['noTelp']; ?></td>
                        <td>
                            <a href="editdokter.php?edit=<?= $row['idDokter']; ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="#" class="btn btn-danger btn-sm" onclick="return hapus('<?= $row['idDokter']; ?>')">Hapus</a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </body>
            </table>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+Nf2pFdBoi1MquU9a1w4gWFGmbFiF" crossorigin="anonymous"></script>
</body>
</html>
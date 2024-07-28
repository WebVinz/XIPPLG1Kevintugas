<!DOCTYPE html>
<html>
<head>
    <title>App | Halaman Utama</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    

</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8 col-sm-10">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title">Edit Data Pasien</h3>
                </div>
                <div class="card-body">
                    <?php
                    include 'koneksi.php';

                    $panggil = $koneksi->query("SELECT * FROM pasien WHERE idPasien='$_GET[edit]'");

                    while ($row = $panggil->fetch_assoc()) {
                    ?>
                    <form action="koneksi.php" method="POST">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="idPasien" name="idPasien" placeholder="ID Pasien" value="<?= $row['idPasien'] ?>" readonly>
                            <label for="idPasien">ID Pasien</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="nmPasien" name="nmPasien" placeholder="Nama Pasien" value="<?= $row['nmPasien'] ?>">
                            <label for="nmPasien">Nama Pasien</label>
                        </div>
                        <div class="form-group">
                            <label for="jk">Jenis Kelamin</label>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="jk" value="Perempuan" id="jkP" <?php if ($row['jk'] == "Perempuan") { echo "checked"; } ?>>
                                <label class="form-check-label" for="jkP">Perempuan</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="jk" value="Laki-laki" id="jkL" <?php if ($row['jk'] == "Laki-laki") { echo "checked"; } ?>>
                                <label class="form-check-label" for="jkL">Laki-laki</label>
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="Alamat" id="alamat" name="alamat" style="height: 100px;"><?= $row['alamat'] ?></textarea>
                            <label for="alamat">Alamat</label>
                        </div>
                        <div class="form-group mt-3">
                            <input type="submit" name="simpan" value="Simpan" class="form-control btn btn-primary">
                        </div>
                    </form>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
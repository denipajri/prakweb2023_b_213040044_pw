<?php 
require 'function.php';

$id = $_GET["id"];
$buku = query("SELECT * FROM buku WHERE id = $id"[0]);

if (isset($_POST["ubah"])) {
    if (ubah($_POST) > 0) {
        echo "<script>alert('Data buku telah berhasil diubah!');
        document.location.href = 'index.php';
        </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta nmae="viewport" content="width=device-width, initial-scale=1">
    <title>Buku</title>
    <link href="<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">">
</head>
<body>
    <div class="container">
        <h1>Ubah Data Buku</h1>
        <a href="index.php">Kembali</a>
        <div class="row mt-3">
            <div class="col-8">
                <form action="" method="post" autocomplete="off">
                    <input type="hidden" name="id" value="<?= $buku['id']; ?>">
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" name="judul" id="judul" class="form-control" value="<?= $buku['judul']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="penulis" class="form-label">Penulis</label>
                        <input type="text" name="penulis" id="penulis" class="form-control" value="<?= $buku['penulis']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="penerbit" class="form-label">Penerbit</label>
                        <input type="text" name="penerbit" id="penerbit" class="form-control" value="<?= $buku['penerbit']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="genre" class="form-label">Genre</label>
                        <input type="text" name="genre" id="genre" class="form-control" value="<?= $buku['genre']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="text" name="harga" id="harga" class="form-control" value="<?= $buku['harga']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                        <input type="text" name="tahun_terbit" id="tahun_terbit" class="form-control" value="<?= $buku['tahun_terbit']; ?>">
                    </div>
                    <button type="submit" class="btn btn-primary" name="ubah">Ubah</button>
                </form>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
<?php 

require('function.php');
$buku = query("SELECT * FROM buku");

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
    <div class="container-x1 border my-5">
        <div class="title mb-3 mt-3">
            <h2>Data Buku</h2>
        </div>
        <a href="tambah.php" class="btn btn-primary">Tambah</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Sampul</th>
                    <th scope="col">Judul</th>
                    <th scope="col">ISBN</th>
                    <th scope="col">Penulis</th>
                    <th scope="col">Penerbit</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Tahun Terbit</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach($buku as $a) ?>
                <tr>
                    <th scope="row"><?php echo $no++; ?></th>
                    <td class="text-center">
                        <img class="img-thumbnail image-max-height" src="img/<?= $a["sampul"]; ?>">
                    </td>
                    <td><?php echo $a["judul"]; ?></td>
                    <td><?php echo $a["penulis"]; ?></td>
                    <td><?php echo $a["penerbit"]; ?></td>
                    <td><?php echo $a["genre"]; ?></td>
                    <td><?php echo $a["harga"]; ?></td>
                    <td><?php echo $a["tahun_terbit"]; ?></td>
                    <td>
                        <a href="ubah.php?id=<?php echo $a['id']; ?>" class="btn badge bg-warning">Ubah</a>
                        <a href="hapus.php?id=<?php echo $a['id']; ?>" class="btn badge bg-danger" onclick="return confirm('Apakah anda yakin ingin menghapusnya?')">Hapus</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
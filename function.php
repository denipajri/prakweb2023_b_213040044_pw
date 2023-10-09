<<?php 

//koneksi
function koneksi(){
    $conn = mysqli_connect("localhost", "root", "", "prakweb_2023_b_213040044");
    return $conn;

    if (!$conn) {
        die("<script>alert('Koneksi Gagal!')</script>");
    }
}

// query data ke tabel
function query($query){
    $conn = koneksi();
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

    // saipkan data
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $row;
}

// tambah
function tambah($buku) {
    $conn = koneksi();

    $judul = $buku["judul"];
    $penulis = $buku["penulis"];
    $penerbit = $buku["penerbit"];
    $genre = $buku["genre"];
    $harga = $buku["harga"];
    $tahun_terbit = $buku["tahun_terbit"];

    $query_tambah = "INSERT INTO buku VALUES (null, '$judul', '$penulis', '$penerbit', '$genre', '$harga', '$tahun_terbit')";

    mysqli_query($conn, $query_tambah) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function hapus($id) {
    $conn = koneksi();

    mysqli_query($conn, "DELETE FROM buku WHERE id = '$id'") or die(mysqli_errno($conn));

    return mysqli_affected_rows($conn);
}

function ubah($buku) {
    $conn = koneksi();

    $id = $buku['id'];
    $judul = htmlspecialchars($buku["judul"]);
    $penulis = htmlspecialchars($buku["penulis"]);
    $penerbit = htmlspecialchars($buku["penerbit"]);
    $genre = htmlspecialchars($buku["genre"]);
    $harga = htmlspecialchars($buku["harga"]);
    $tahun_terbit = htmlspecialchars($buku["tahun_terbit"]);

    $query_ubah = "UPDATE buku SET
    judul = '$judul',
    penulis = '$penulis',
    penerbit = '$penerbit',
    genre = '$genre',
    harga = '$harga',
    tahun_terbit = '$tahun_terbit'
    WHERE id = '$id';
    ";

    mysqli_query($conn, $query_ubah) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}
?>
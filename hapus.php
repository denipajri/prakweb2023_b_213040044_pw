<?php 
require 'function.php';

if (hapus($_GET['id']) > 0) {
    echo "<script>
    alert(Data buku sudah dihappus!');
    document.location.href = 'index.php';
        </script>";
}
?>
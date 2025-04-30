<?php
require_once '../setting/link.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM perusahaan WHERE id='$id'";
    $query = mysqli_query($koneksi, $sql);
    if ($query) {
        header('Location: index.php');
    } else {
        echo "Data gagal dihapus";
    }
} else {
    echo "ID tidak ditemukan";
}
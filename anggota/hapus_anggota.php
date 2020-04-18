<?php  

include '../koneksi.php';

$id_anggota = $_GET['id_anggota'];

mysqli_query($koneksi,"DELETE FROM anggota1 WHERE id_anggota='$id_anggota'");

header("location:index.php");

?>
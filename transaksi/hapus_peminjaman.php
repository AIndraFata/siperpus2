<?php 

include '../koneksi.php';

$id_pinjam = $_GET['id_pinjam'];

$query  = mysqli_query($koneksi,"DELETE FROM detail_peminjaman1 WHERE id_pinjam='$id_pinjam'");
$query2 = mysqli_query($koneksi,"DELETE FROM peminjaman1 WHERE id_pinjam='$id_pinjam'"); 

if (isset($query)) {
	header("Location:index.php");
} else {
	header("Location:index.php");
}


?>
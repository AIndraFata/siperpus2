<?php  

include '../koneksi.php';

if(isset($_POST["simpan"])){

	$judul 			= htmlspecialchars($_POST['judul']);
	$penerbit 		= htmlspecialchars($_POST['penerbit']);
	$pengarang 		= htmlspecialchars($_POST['pengarang']);
	$ringkasan 		= htmlspecialchars($_POST['ringkasan']);
	$cover 			= htmlspecialchars($_POST['cover']);
	$stok			= htmlspecialchars($_POST['stok']);
	$id_kategori 	= htmlspecialchars($_POST['id_kategori']);

	$sql = "INSERT INTO buku1 (judul, penerbit, pengarang, ringkasan, cover, stok, id_kategori) VALUES ('$judul', '$penerbit', '$pengarang', '$ringkasan', 'cover', '$stok', '$id_kategori')";

	$res = mysqli_query($koneksi, $sql);

	$count = mysqli_affected_rows($koneksi);

		if($count){
			echo "<script>alert('Data Berhasil di Tambah.');window.location='index.php';</script>";
		}
}else{
	header("location: tambah_buku.php");
}
if(isset($_POST["kembali"])){
header("location: index.php");
	}
?>
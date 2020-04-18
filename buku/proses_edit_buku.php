<?php 

include '../koneksi.php';

if (isset($_POST['simpan'])) {
	$id_buku 		= $_POST['id_buku'];
	$judul 			= $_POST['judul'];
	$penerbit 		= $_POST['penerbit'];
	$pengarang 		= $_POST['pengarang'];
	$ringkasan 		= $_POST['ringkasan'];
	$cover 			= $_POST['cover'];
	$stok 			= $_POST['stok'];	
	$id_kategori 	= $_POST['id_kategori'];

	$sql = "UPDATE buku1 SET 	judul='$judul', 
								penerbit='$penerbit', 
								pengarang='$pengarang', 
								ringkasan='$ringkasan', 
								cover='$cover', 
								stok=$stok, 
								id_kategori=$id_kategori WHERE id_buku = $id_buku";

	$res = mysqli_query($koneksi, $sql);
	var_dump($res,$_POST);
	
	$count = mysqli_affected_rows($koneksi);

	if($count){
		echo "<script>alert('Data berhasil di Ubah');window.location='index.php';</script>";
	}

	if ($count){
		header("Location: index.php");
	}else{
		header("Location: edit_buku.php");
	}
	}
	else if(isset($_POST['kembali'])) {
		header("Location: index.php");
	}
?>
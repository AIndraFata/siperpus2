<?php 

include '../koneksi.php';

if (isset($_POST['simpan'])) {
	$id_anggota 		= $_POST['id_anggota'];
	$nama 				= $_POST['nama'];
	$kelas		 		= $_POST['kelas'];
	$telp	 			= $_POST['telp'];
	$username 			= $_POST['username'];
	$password 			= $_POST['password'];
	$id_level 			= $_POST['id_level'];

	$sql = "UPDATE anggota1 SET nama 		='$nama', 
								kelas		='$kelas', 
								telp 	    ='$telp', 
								username	='$username', 
								password 	='$password',  
								id_level    =$id_level WHERE id_anggota = $id_anggota";

	$res = mysqli_query($koneksi, $sql);
	// var_dump($res,$_POST);
	
	$count = mysqli_affected_rows($koneksi);

	if($count){
		echo "<script>alert('Data berhasil di Ubah');window.location='index.php';</script>";
	}

	if ($count){
		header("Location: index.php");
	}else{
		header("Location: edit_anggota.php");
	}
	}
	else if(isset($_POST['kembali'])) {
		header("Location: index.php");
	}
?>
<?php  

include '../koneksi.php';

if(isset($_POST["simpan"])){

	$id_anggota			= ($_POST['id_anggota']);
	$tgl_pinjam			= ($_POST['tgl_pinjam']);
	$tgl_jatuh_tempo 	= date('Y-m-d', strtotime($tgl_pinjam.'+7 days'));
	$id_petugas 		= ($_POST['id_petugas']);
	

	$sql = "INSERT INTO peminjaman1 (id_anggota, , tgl_pinjam, tgl_jatuh_tempo, id_petugas) VALUES ('$id_anggota', '$tgl_pinjam', '$tgl_jatuh_tempo', '$id_petugas')";

	$res = mysqli_query($koneksi, $sql);

	$count = mysqli_affected_rows($koneksi);

		if($count){
			echo "<script>alert('Data Berhasil di Tambah.');window.location='index.php';</script>";
		}
}else{
	header("location: tambah_peminjaman.php");
}
if(isset($_POST["kembali"])){
header("location: index.php");
	}
?>
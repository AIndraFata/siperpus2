<?php 

include '../koneksi.php';
include '../aset/header.php';
$query = mysqli_query($koneksi,"SELECT * FROM petugas1");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Buku</title>
</head>
<body>
<div class="countainer">
	<div class="row mt-4">
		<div class="col-md">
		<center>
			<h2>Tambah Buku</h2>
			<hr class="bg-light">
			<form action="proses_tambah.php" method="post">
				<table>
					<tr>
						<th>
							<table class="table table-bordered">
								<tr>
									<td>Nama Peminjam</td>
									<td><input type="text" name="id_anggota"></td>
								</tr>	
								<tr>
									<td>Tanggal Pinjam</td>
									<td><input type="date" name="tgl_pinjam"></td>
								</tr>
								<tr>
									<td>Tanggal Jatuh Tempo</td>
									<td><input type="date" name="tgl_jatuh_tempo"></td>
								</tr>
								<tr>
									<td>Petugas</td>
									<td><select name="id_petugas">
											<option>Pilih Petugas</option>
											<?php 
											while($wew = mysqli_fetch_assoc($query)):
											?>
											<option value="<?php echo $wew['id_petugas']; ?>"><?php echo $wew['nama_petugas']; ?></option>
											<?php endwhile; ?>
										</select></td>
								</tr>
								<tr>
									<td></td>
									<td><button type="submit" class="btn btn-primary" name="simpan">Simpan</button> 
									<button name=kembali type="submit" class="btn btn-success">Kembali</button></a>
								</tr>
							</table>
						</th>
					</tr>
				</table>
			</form>
		</center>
		</div>
	</div>
</div>
</body>
</html>

<?php 
include '../aset/footer.php';
?>
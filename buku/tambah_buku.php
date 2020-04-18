<?php 

include '../koneksi.php';
include '../aset/header.php';

$query = mysqli_query($koneksi,"SELECT * FROM kategori1");

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
			<form action="proses_tambah_buku.php" method="post">
				<table>
					<tr>
						<th>
							<table class="table table-bordered">
								<tr>
									<td>Judul</td>
									<td><input type="text" name="judul"></td>
								</tr>	
								<tr>
									<td>Penerbit</td>
									<td><input type="text" name="penerbit"></td>
								</tr>
								<tr>
									<td>Pengarang</td>
									<td><input type="text" name="pengarang"></td>
								</tr>
								<tr>
									<td>Ringkasan</td>
									<td>
										<textarea name="ringkasan" style="width:190px">
								
										</textarea>
									</td>
								</tr>
								<tr>
									<td>Cover</td>
									<td><input type="file" name="cover"></td>
								</tr>
								<tr>
									<td>Stok</td>
									<td><input type="number" name="stok"></td>
								</tr>
								<tr>
									<td>Kategori</td>
									<td>
										<select name="id_kategori">
											<option>Pilih Kategori</option>
											<?php 
											while($wew = mysqli_fetch_assoc($query)):
											?>
											<option value="<?php echo $wew['id_kategori']; ?>"><?php echo $wew['kategori']; ?></option>
											<?php endwhile; ?>
										</select>
									</td>
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
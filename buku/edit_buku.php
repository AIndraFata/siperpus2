<?php 
include '../koneksi.php';

include '../aset/header.php';


$id_buku = $_GET['id_buku'];
$query = mysqli_query($koneksi,"SELECT * FROM buku1 INNER JOIN kategori1 ON buku1.id_kategori = kategori1.id_kategori WHERE id_buku=$id_buku");

$edit = mysqli_fetch_assoc($query);

?>
<html>
<head>
	<title>Edit Data Buku</title>
</head>
<body>
<div class="countainer">
	<div class="row mt-4">
		<div class="col-md">
		<center>
			<h2>Edit Buku</h2>
			<hr class="bg-dark">
			<form action="proses_edit_buku.php" method="post">
			<table class="bg-light">
				<tr>
					<th>
						<table class="table table-bordered">
						<input type="hidden" name="id_buku" value="<?= $edit['id_buku'] ?>">
						<tr>
							<td>Judul</td>
							<td><input type="text" name="judul" value="<?= $edit['judul'] ?>"></td>
						</tr>
						<tr>
							<td>Penerbit</td>
							<td><input type="text" name="penerbit" value="<?= $edit['penerbit'] ?>"></td>
						</tr>
						<tr>
							<td>Pengarang</td>
							<td><input type="text" name="pengarang" value="<?= $edit['pengarang'] ?>"></td>
						</tr>
						<tr>
							<td>Ringkasan</td>
							<td>
							<textarea name="ringkasan" style="width:170px"><?= $edit['ringkasan'] ?>
						
							</textarea>
							</td>
						</tr>
							<td>Cover</td>
							<td><input type="file" name="cover" value="<?= $edit['cover'] ?>"></td>
						<tr>
							<td>Stok</td>
							<td><input type="number" name="stok" value="<?= $edit['stok'] ?>"></td>
						</tr>
						<tr>
							<td>Kategori</td>
							<td>
								<select name="id_kategori">
									<option value="">Pilih Kategori</option>
									<?php
									$querry = mysqli_query($koneksi,"SELECT * FROM  kategori1"); 
									while($wew = mysqli_fetch_assoc($querry)):
									?>
									<option value="<?php echo $wew['id_kategori']; ?>"><?php echo $wew['kategori']; ?></option>
									<?php endwhile; ?>
								</select>
							</td>
						</tr>
						<tr>
							<td></td>
							<td><button type="submit" class="btn btn-success" name="simpan">Simpan</button>
							<button name="kembali" type="submit" class="btn btn-primary">Kembali</button></td>
						</tr>
						</table>
					</th>
				</tr>
			</table>
		</form>
</body>
</html>

<?php 
include '../aset/footer.php';
?>
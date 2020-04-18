<?php 
include '../koneksi.php';

include '../aset/header.php';

$id_buku = $_GET['id_buku'];
$query = mysqli_query($koneksi,"SELECT * FROM buku1 INNER JOIN kategori1 ON buku1.id_kategori = kategori1.id_kategori WHERE id_buku=$id_buku");

$a = mysqli_fetch_assoc($query);

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
			<hr class="bg-light">
			<form action="proses-edit.php" method="post">
			<table><tr><th>
			<table class="table table-bordered">
			<input type="hidden" name="id_buku" value="<?= $a['id_buku'] ?>">
			<tr>
				<td>Judul</td>
				<td><input type="text" name="judul" value="<?= $a['judul'] ?>"></td>
			</tr>
			<tr>
				<td>Penerbit</td>
				<td><input type="text" name="penerbit" value="<?= $a['penerbit'] ?>"></td>
			</tr>
			<tr>
				<td>Pengarang</td>
				<td><input type="text" name="pengarang" value="<?= $a['pengarang'] ?>"></td>
			</tr>
			<tr>
				<td>Ringkasan</td>
				<td>
					<textarea name="ringkasan" style="width:170px"><?= $a['ringkasan'] ?>
						
					</textarea>
				</td>
			</tr><input type="hidden" name="cover" value="<?= $a['cover'] ?>">
			<tr>
				<td>Stok</td>
				<td><input type="number" name="stok" value="<?= $a['stok'] ?>"></td>
			</tr>
			<tr>
				<td>Kategori</td>
				<td>
					<select name="id_kategori">
						<option>-0- Pilih Kategori -0-</option>
						<?php
						$querry = mysqli_query($koneksi,"SELECT * FROM  kategori"); 
						while($b = mysqli_fetch_assoc($querry)):
						?>
						<option value="<?php echo $b['id_kategori']; ?>"><?php echo $b['kategori']; ?></option>
						<?php endwhile; ?>
					</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><button type="submit" class="btn btn-primary" name="simpan">Save</button>&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-danger" name="kembali">Kembali</button></td>
			</tr>
		</table>
		</th></tr></table>
		</form>
</body>
</html>

<?php 
include '../aset/footer.php';
?>
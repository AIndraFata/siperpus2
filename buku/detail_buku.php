	<?php 
include '../aset/header.php';
include '../koneksi.php';

$id_buku = $_GET['id_buku'];

$sql = "SELECT * FROM buku1 INNER JOIN kategori1 ON buku1.id_kategori = kategori1.id_kategori WHERE id_buku = $id_buku";
$res = mysqli_query($koneksi,$sql);
$detail = mysqli_fetch_assoc($res);

?>

<div class="countainer">
	<div class="row mt-4">
		<div class="col-md">
		<center>
			<h2>Detail Buku</h2>
			<hr class="bg-dark">
			<table><tr>
					<th>
					<table class="table table-bordered, bg-dark" style="color: white">
						<tr>
							<td width="100"><strong>Judul</strong></td>
							<td width="500"><?= $detail['judul'] ?></td>
						</tr>
						<tr>
							<td width="100"><strong>Penerbit</strong></td>
							<td width="500"><?= $detail['penerbit'] ?></td>
						</tr>
						<tr>
							<td width="100"><strong>Pengarang</strong></td>
							<td width="500"><?= $detail['pengarang'] ?></td>
						</tr>
						<tr>
							<td width="100"><strong>Ringkasan</strong></td>
							<td width="500"><?= $detail['ringkasan'] ?></td>
						</tr>
						<tr>
							<td><strong>Cover</strong></td>
							<td><?php echo "<img src='$detail[cover]' ?>";?></td>
						</tr>
						<tr>
							<td width="100"><strong>Stok</strong></td>
							<td width="500"><?= $detail['stok'] ?></td>
						</tr>
						<tr>
							<td width="100"><strong>Kategori</strong></td>
							<td width="500"><?= $detail['kategori'] ?></td>
						</tr>
					</table>
					</th>
				</tr></table>
				<center><a href="index.php"><button type="submit" class="btn btn-primary">Kembali</button></a></center>
		</div>
	</div>
</div>

<?php
include '../aset/footer.php';
?>
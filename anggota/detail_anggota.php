	<?php 
include '../aset/header.php';
include '../koneksi.php';

$id_anggota = $_GET['id_anggota'];

$sql = "SELECT * FROM anggota1 INNER JOIN level1 ON anggota1.id_level = level1.id_level WHERE id_anggota = $id_anggota";
$res = mysqli_query($koneksi,$sql);
$detail = mysqli_fetch_assoc($res);

?>

<div class="countainer">
	<div class="row mt-4">
		<div class="col-md">
		<center>
			<h2>Detail Anggota</h2>
			<hr class="bg-dark">
			<table><tr>
					<th>
					<table class="table table-bordered, bg-dark" style="color: white">
						<tr>
							<td width="100"><strong>Nama</strong></td>
							<td width="500"><?= $detail['nama'] ?></td>
						</tr>
						<tr>
							<td width="100"><strong>Kelas</strong></td>
							<td width="500"><?= $detail['kelas'] ?></td>
						</tr>
						<tr>
							<td width="100"><strong>Nomor Telepon</strong></td>
							<td width="500"><?= $detail['telp'] ?></td>
						</tr>
						<tr>
							<td width="100"><strong>Username</strong></td>
							<td width="500"><?= $detail['username'] ?></td>
						</tr>
						<tr>
							<td width="100"><strong>Password</strong></td>
							<td width="500"><?= $detail['password'] ?></td>
						</tr>
						<tr>
							<td width="100"><strong>level</strong></td>
							<td width="500"><?= $detail['level'] ?></td>
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
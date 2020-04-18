<?php 
include '../koneksi.php';

include '../aset/header.php';


$id_anggota = $_GET['id_anggota'];
$query = mysqli_query($koneksi,"SELECT * FROM anggota1 INNER JOIN level1 ON anggota1.id_level = level1.id_level WHERE id_anggota=$id_anggota");

$edit = mysqli_fetch_assoc($query);

?>
<html>
<head>
	<title>Edit Data Anggota</title>
</head>
<body>
<div class="countainer">
	<div class="row mt-4">
		<div class="col-md">
		<center>
			<h2>Edit Anggota</h2>
			<hr class="bg-dark">
			<form action="proses-edit.php" method="post">
			<table class="bg-light">
				<tr>
					<th>
						<table class="table table-bordered">
						<input type="hidden" name="id_anggota" value="<?= $edit['id_anggota'] ?>">
						<tr>
							<td>Nama</td>
							<td><input type="text" name="nama" value="<?= $edit['nama'] ?>"></td>
						</tr>
						<tr>
							<td>Kelas</td>
							<td><input type="text" name="kelas" value="<?= $edit['kelas'] ?>"></td>
						</tr>
						<tr>
							<td>Nomor Telepon</td>
							<td><input type="text" name="telp" value="<?= $edit['telp'] ?>"></td>
						</tr>
						<tr>
							<td>Username</td>
							<td><input type="text" name="username" value="<?= $edit['username']?>"></td>
						</tr>
							<td>Password</td>
							<td><input type="password" name="password" value="<?= $edit['password'] ?>"></td>
						<tr>
							<td>Level</td>
							<td>
								<select name="id_level">
									<option value="">Pilih Level</option>
									<?php
									$querry = mysqli_query($koneksi,"SELECT * FROM  level1"); 
									while($wew = mysqli_fetch_assoc($querry)):
									?>
									<option value="<?php echo $wew['id_level']; ?>"><?php echo $wew['level']; ?></option>
									<?php endwhile; ?>
								</select>
							</td>
						</tr>
						<tr>
							<td></td>
							<td><button name="simpan" type="submit" class="btn btn-success">Simpan</button>
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
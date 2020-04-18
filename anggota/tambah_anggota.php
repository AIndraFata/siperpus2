<?php  
include '../aset/header.php';
?>

<html>
<head>
	<title></title>
</head>
<body>
	<center><h1>Form Tambah Data Anggota</h1></center>
	
<center><table>
	<form action="proses-tambah.php" method="post">
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama"></td>
	</tr>
	<tr>
		<td>Kelas</td>
		<td><input type="text" name="kelas"></td>
	</tr>
	<tr>
		<td>Nomor Telepon</td>
		<td><input type="number" name="telp"></td>
	</tr>
	<tr>
		<td>Username</td>
		<td><input type="text" name="username"></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input type="password" name="password"></td>
	</tr>
	<tr>
		<td></td>
		<td><button type="submit" class="btn btn-primary" name="submit">Tambah Anggota</button></td>
	</tr>
</table>
</body>
</html>

<?php  
include '../aset/footer.php';
?>
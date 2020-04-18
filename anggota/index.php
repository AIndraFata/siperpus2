<?php 
include '../koneksi.php';

$sql = "SELECT * FROM anggota1 ORDER BY nama";

$res = mysqli_query($koneksi, $sql);

$pinjam = array();

while ($data = mysqli_fetch_assoc($res)) {
	$pinjam[] = $data;
}

include '../aset/header.php';
?>

<div class="container">
	<div class="row mt-4">
		<div class="col-md">
		</div>
	</div>
</div>

<div class="card">
  	<div class="card-header">
  		<h2 class="card-title"><i class="fas fa-edit"></i>Data Anggota</h2>

  	</div>
    <br>

    <center><div>
      <a href="tambah_anggota.php"><button type="submit" class="btn btn-primary" name="simpan">Tambah Anggota</button></a>
    </div></center>
    
    <center></center> 
    <div class="card-body">
  	<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Kelas</th>
      <th scope="col">Nomor Telepon</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Jabatan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php  
    $no = 1;
    foreach ($pinjam as $p){ ?>
    	<tr>
    		<th scope="row"><?php $no ?></th>
    		<td><?= $p['nama'] ?></td>
    		<td><?= $p['kelas'] ?></td>
    		<td><?= $p['telp'] ?></td>
    		<td><?= $p['username'] ?></td>
        <td><?= $p['password']?></td>
        <td><?= $p['id_level']?></td>
    		<td>
    			<a href="detail_anggota.php?id_anggota=<?php echo $p['id_anggota']; ?>" class="badge badge-success">Detail</a>
				<a href="edit_anggota.php?id_anggota=<?php echo $p['id_anggota']; ?>" class="badge badge-warning">Edit</a>
				<a href="hapus_anggota.php?id_anggota=<?php echo $p['id_anggota']; ?>" class="badge badge-danger">Hapus</a>
			</td>
    	</tr>
    	<?php 
    		$no++;
    	}
    	?>
  </tbody>
</table>
    </div>
</div>
<br>

<?php 
include '../aset/footer.php';
?>
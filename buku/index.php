<?php 
include '../koneksi.php';

$sql = "SELECT * FROM buku1 ORDER BY judul";

$res = mysqli_query($koneksi, $sql);

$peminjaman = array();

while ($data = mysqli_fetch_assoc($res)) {
	$peminjaman[] = $data;
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
  		<h2 class="card-title"><i class="fas fa-edit"></i>Data Buku</h2>
  	</div>
    <div class="card-body">
  	<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Judul</th>
      <th scope="col">Penerbit</th>
      <th scope="col">Pengarang</th>
      <th scope="col">Ringkasan</th>
      <th scope="col">Cover</th>
      <td scope="col">Stok</td>
      <td scope="col">Kategori</td>
      <td scope="col">Aksi</td>
    </tr>
  </thead>
  <tbody>
    <?php  
    $no = 1;
    foreach ($peminjaman as $p){ ?>
    	<tr>
    		<th scope="row"><?php $no ?></th>
    		<td><?= $p['judul'] ?></td>
    		<td><?= $p['penerbit'] ?></td>
    		<td><?= $p['pengarang'] ?></td>
    		<td><?= $p['ringkasan'] ?></td>
        <td><?= $p['cover']?></td>
        <td><?= $p['stok']?></td>
        <td><?= $p['id_kategori']?></td>
    		<td>
    			<a href="detail_buku.php?id_buku=<?php echo $p['id_buku']; ?>" class="badge badge-success">Detail</a>
				  <a href="edit_buku.php?id_buku=<?php echo $p['id_buku']; ?>" class="badge badge-warning">Edit</a>
				  <a href="hapus_buku.php?id_buku=<?php echo $p['id_buku']; ?>" class="badge badge-danger">Hapus</a>
			</td>
    	</tr>
    	<?php 
    		$no++;
    	}

    	?>
    ?>
  </tbody>
</table>
<center><div><a href="tambah_buku.php"><button type="submit" class="btn btn-primary" name="simpan">Tambah Data buku</button></a></div></center>
    </div>
</div>

<?php 
include '../aset/footer.php';
?>
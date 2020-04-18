<?php
include '../aset/header.php';
include '../koneksi.php';

$id_pinjam  = $_GET['id_pinjam'];
$id_buku    = $_GET['id_buku'];

$sql="SELECT judul FROM buku1 WHERE id_buku=$id_buku";
$res=mysqli_query($koneksi, $sql);
$data=mysqli_fetch_assoc($res);
?>

<div class="container">
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card">
                <h5 class="card-header">Form Pengembalian</h5>
                <div class="card-body">
                    <form action="proses-kembali.php" method="post">
                        <div class="form-group">
                            <label for="Judul">Judul</label>
                            <input class="form-control" type="text" disabled value="<?= $data['judul'];?>">
                        </div>
                        <div class="form-group">
                            <label for="tgl_kembali">Tanggal Kembali</label>
                            <input type="date" name="tgl_kembali" class="form-control">
                        </div>
                        <input type="hiden" name="id_pinjam" value="<?= $id_pinjam;?>">
                        <input type="hiden" name="id_buku" value="<?= $id_buku;?>">
                        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include '../aset/footer.php';
?>
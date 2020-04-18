<?php
include '../koneksi.php';
include 'fungsi-transaksi.php';

$buku       = ambilBuku($koneksi);
$anggota    = ambilAnggota($koneksi);
$petugas    = ambilPetugas($koneksi);

include '../aset/header.php';
?>

<div class="container">
    <div class="row mt-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>Form Tambah Peminjaman</h3>
                </div>
                <div class="card-body">
                    <form action="proses-pinjam.php" method="post">
                        <div class="form-group">
                            <label for="anggota1">Nama Anggota</label>
                            <select name="id_anggota" class="form-control">
                                <?php
                                    foreach ($anggota as $a) { ?>
                                        <option value="<?= $a['id_anggota'];?>"><?= $a['nama'];?></option>
                                    <?php
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="buku1">Judul Buku</label>
                            <select name="id_buku" class="form-control">
                                <?php
                                    foreach ($buku as $b) { ?>
                                        <option value="<?= $b['id_buku'];?>"><?= $b['judul'];?></option>
                                    <?php
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="petugas1">Nama Petugas</label>
                            <select name="id_petugas" class="form-control">
                                <?php
                                    foreach ($petugas as $pet) { ?>
                                        <option value="<?= $pet['id_petugas'];?>"><?= $pet['nama_petugas'];?></option>
                                    <?php
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="datepicker">Tanggal Pinjam</label>
                            <input type="date" name="tgl_pinjam" class="form-control" require>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="btnPinjam" class="btn btn-primary mr-auto">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include '../aset/footer.php';
?>
<?php
include '../layouts/header.php';
include '../layouts/navbar.php';
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Data Transaksi</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Form Tambah Data Transaksi</h3>

                            <div class="card-tools">
                            </div>

                        </div>
                        <div class="card-body">
                            <form method="post" action="tambah_transaksi.php">
                                <div class="form-group">
                                    <label>Pilih Member</label>
                                    <select class="form-control">
                                        <option> --- Pilih Nama Member --- </option>
                                        <?php
                                        include "../koneksi.php";
                                        $tb_member = mysqli_query($koneksi, "SELECT * FROM tb_member");
                                        while ($d_tb_member = mysqli_fetch_array($tb_member)) {
                                        ?>
                                            <option value="<?= $d_tb_member['id'] ?>"><?= $d_tb_member['nama'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Pilih Outlet</label>
                                    <select id="ubahid_outlet" name="id_outlet" class="form-control" id="id_outet" onchange="this.form.submit()">
                                        <option> --- Pilih Nama Outlet --- </option>
                                        <?php
                                        include "../koneksi.php";
                                        $tb_outlet = mysqli_query($koneksi, "SELECT * FROM tb_outlet");
                                        while ($d_tb_outlet = mysqli_fetch_array($tb_outlet)) {
                                        ?>
                                            <option value="<?= $d_tb_outlet['id'] ?>"><?= $d_tb_outlet['nama'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Pilih Paket</label>
                                    <select class="form-control" name="id_paket">
                                        <option> --- Pilih Nama Paket --- </option>
                                        <?php
                                        include "../koneksi.php";
                                        $tb_paket = mysqli_query($koneksi, "SELECT * FROM tb_paket");
                                        while ($d_tb_paket = mysqli_fetch_array($tb_paket)) {
                                        ?>
                                            <option value="<?= $d_tb_paket['id'] ?>"><?= $d_tb_paket['nama_paket'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Berat</label>
                                    <input type="number" name="qty" class="form-control" placeholder="Masukkan Berat">
                                </div>
                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <textarea class="form-control" name="" rows="3"></textarea>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include '../layouts/footer.php';
?>
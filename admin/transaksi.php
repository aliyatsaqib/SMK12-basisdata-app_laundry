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
                    <h1 class="m-0">Transaksi</h1>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <!-- /.col-md-6 -->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Transaksi</h3>

                            <div class="card-tools">
                                <!--<a href="tambah_transaksi.php" class="btn btn-primary btn-sm"><i class="fas fa-plus"> Tambah Data</i></a>-->
                                <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-tambah"><i class="fas fa-plus"></i> Tambah Data</button>
                            </div>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <?php
                            if (isset($_GET['info'])) {
                                if ($_GET['info'] == "hapus") { ?>
                                    <div class="alert alert-success alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <h5><i class="icon fas fa-trash"></i> Sukses</h5>
                                        Data berhasil di hapus
                                    </div>
                                <?php } else if ($_GET['info'] == "simpan") { ?>
                                    <div class="alert alert-success alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <h5><i class="icon fas fa-check"></i> Sukses</h5>
                                        Data berhasil di hapus
                                    </div>
                                <?php } else if ($_GET['info'] == "update") { ?>
                                    <div class="alert alert-success alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <h5><i class="icon fas fa-edit"></i> Sukses</h5>
                                        Data berhasil di update
                                    </div>
                            <?php }
                            } ?>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Nama Member</th>
                                        <th>Jenis Paket</th>
                                        <th>Nama Outlet</th>
                                        <th>Berat Cucian</th>
                                        <th>Total Bayar</th>
                                        <th style="width: 150px;">Status</th>
                                        <th>Ubah Status</th>
                                        <th>Bayar Transaksi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    include "../koneksi.php";
                                    $tb_transaksi = mysqli_query($koneksi, "SELECT * FROM tb_transaksi");
                                    while ($d_tb_transaksi = mysqli_fetch_array($tb_transaksi)) {
                                        $tb_paket_d = mysqli_query($koneksi, "SELECT * FROM tb_paket where id='$d_tb_transaksi[id_paket]'");
                                        while ($d_tb_paket_d = mysqli_fetch_array($tb_paket_d)) {
                                            $tb_outlet_d = mysqli_query($koneksi, "SELECT * FROM tb_outlet where id='$d_tb_transaksi[id]'");
                                            while ($d_tb_outlet_d = mysqli_fetch_array($tb_outlet_d)) {
                                                $tb_member = mysqli_query($koneksi, "SELECT * FROM tb_member where id='$d_tb_transaksi[id_member]'");
                                                while ($d_tb_member_d = mysqli_fetch_array($tb_member)) {
                                                    $tb_user = mysqli_query($koneksi, "SELECT * FROM tb_user where id='$d_tb_transaksi[id_user]'");
                                                    while ($d_tb_user_d = mysqli_fetch_array($tb_user)) {
                                    ?>
                                                        <tr>
                                                            <td><?php echo $no++; ?></td>
                                                            <td><?= $d_tb_member_d['nama'] ?></td>
                                                            <td><?= $d_tb_paket_d['nama_paket'] ?></td>
                                                            <td><?= $d_tb_outlet_d['nama'] ?></td>
                                                            <td><?= $d_tb_transaksi['qty'] ?> <?= $d_tb_paket_d['jenis'] ?></td>
                                                            <td>
                                                                <?php
                                                                $a = $d_tb_paket_d['harga'];
                                                                $b = $d_tb_transaksi['qty'];
                                                                $c = $d_tb_transaksi['biaya_tambahan'];
                                                                $total = ($a * $b) + $c;
                                                                echo "Rp. $total";
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <?php
                                                                        if ($d_tb_transaksi['status'] == 'baru') { ?>
                                                                            <p class="btn btn-default btn-sm">Baru</p>
                                                                        <?php } else if ($d_tb_transaksi['status'] == 'proses') { ?>
                                                                            <p class="btn btn-warning btn-sm">Proses</p>
                                                                        <?php } else if ($d_tb_transaksi['status'] == 'selesai') { ?>
                                                                            <p class="btn btn-primary btn-sm">Selesai</p>
                                                                        <?php } else { ?>
                                                                            <p class="btn btn-success btn-sm">Diambil</p>
                                                                        <?php } ?>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <?php
                                                                        if ($d_tb_transaksi['dibayar'] == 'dibayar') { ?>
                                                                            <p class="btn btn-success btn-sm">DiBayar</p>
                                                                        <?php } else { ?>
                                                                            <p class="btn btn-danger btn-sm">Belum DiBayar</p>
                                                                        <?php } ?>
                                                                    </div>
                                                                </div>



                                                            </td>
                                                            <td><button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-ubah-status<?php echo $d_tb_transaksi['id']; ?>"><i class="fas fa-edit"> Ubah</i></button>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                if ($d_tb_transaksi['dibayar'] == 'dibayar') { ?>
                                                                    <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-batalkan<?php echo $d_tb_transaksi['id']; ?>"><i class="fas fa-times"> Batalkan</i></button>
                                                                <?php } else { ?>
                                                                    <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-bayar<?php echo $d_tb_transaksi['id']; ?>"><i class="fas fa-edit"> Bayar</i></button>
                                                                <?php } ?>
                                                            </td>
                                                            <td>
                                                                <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-edit<?php echo $d_tb_transaksi['id']; ?>"><i class="fas fa-edit"> Edit</i></button>
                                                                <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-hapus<?php echo $d_tb_transaksi['id']; ?>"><i class="fas fa-trash"> Hapus</i></button>
                                                            </td>
                                                        </tr>

                                                        <div class="modal fade" id="modal-hapus<?php echo $d_tb_transaksi['id']; ?>">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title">Hapus Data Transaksi</h4>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>Apakah anda yakin akan menghapus transaksi <b><?php echo $d_tb_member_d['nama']; ?></b> ?</p>
                                                                    </div>
                                                                    <div class="modal-footer justify-content-between">
                                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                                                                        <a href="hapus_transaksi.php?id=<?php echo $d_tb_transaksi['id']; ?>" class="btn btn-primary">Hapus</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="modal fade" id="modal-bayar<?php echo $d_tb_transaksi['id']; ?>">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title">Bayar Transaksi</h4>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>Apakah anda sudah menerima dana transaksi sebesar <b><?php
                                                                                                                                $a = $d_tb_paket_d['harga'];
                                                                                                                                $b = $d_tb_transaksi['qty'];
                                                                                                                                $c = $d_tb_transaksi['biaya_tambahan'];
                                                                                                                                $total = ($a * $b) + $c;
                                                                                                                                echo "Rp. $total";
                                                                                                                                ?></b> dari <b><?= $d_tb_member_d['nama'] ?></b>...?</p>
                                                                        <form method="post" action="update_bayar_transaksi.php">
                                                                            <div class="modal-body">
                                                                                <div class="form-group">
                                                                                    <input type="text" name="id" value="<?php echo $d_tb_transaksi['id']; ?>" hidden>
                                                                                    <input type="text" name="qty" value="<?php echo $d_tb_transaksi['qty']; ?>" hidden>
                                                                                    <input type="text" name="id_paket" value="<?php echo $d_tb_paket_d['id']; ?>" hidden>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer justify-content-between">
                                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                                                                                <button type="submit" class="btn btn-primary">Update</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="modal fade" id="modal-batalkan<?php echo $d_tb_transaksi['id']; ?>">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title">Batalkan Transaksi</h4>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>Apakah anda belum menerima dana transaksi sebesar <b>Rp. <?= number_format($total); ?></b> dari <b><?php echo $d_tb_member_d['nama']; ?></b> ?</p>
                                                                        <form method="post" action="update_batal_bayar_transaksi.php">
                                                                            <div class="modal-body">
                                                                                <div class="form-group">
                                                                                    <input type="text" name="id" value="<?php echo $d_tb_transaksi['id']; ?>" hidden>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer justify-content-between">
                                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                                                                                <button type="submit" class="btn btn-primary">Update</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="modal fade" id="modal-ubah-status<?php echo $d_tb_transaksi['id']; ?>">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title">Ubah Status Transaksi</h4>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <form method="post" action="update_status_transaksi.php">
                                                                        <div class="modal-body">
                                                                            <div class="form-group">
                                                                                <label>Pilih Status</label>
                                                                                <input type="text" name="id" value="<?php echo $d_tb_transaksi['id']; ?>" hidden>
                                                                                <select class="form-control" name="status">
                                                                                    <option> --- Silahkan Pilih Status --- </option>
                                                                                    <option value="baru" <?php if ('baru' == $d_tb_transaksi['status']) {
                                                                                                                echo 'selected';
                                                                                                            } ?>>Baru</option>
                                                                                    <option value="proses" <?php if ('proses' == $d_tb_transaksi['status']) {
                                                                                                                echo 'selected';
                                                                                                            } ?>>Proses</option>
                                                                                    <option value="selesai" <?php if ('selesai' == $d_tb_transaksi['status']) {
                                                                                                                echo 'selected';
                                                                                                            } ?>>Selesai</option>
                                                                                    <option value="diambil" <?php if ('diambil' == $d_tb_transaksi['status']) {
                                                                                                                echo 'selected';
                                                                                                            } ?>>Diambil</option>
                                                                                </select>

                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer justify-content-between">
                                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                                                                            <button type="submit" class="btn btn-primary">Update</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="modal fade" id="modal-edit<?php echo $d_tb_transaksi['id']; ?>">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title">Edit Data Outlet</h4>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <form method="post" action="edit_outlet.php">
                                                                        <div class="modal-body">
                                                                            <div class="form-group">
                                                                                <label>Pilih Member</label>
                                                                                <select class="form-control">
                                                                                    <option> --- Pilih Nama Member --- </option>
                                                                                    <option>Outlet 1</option>
                                                                                    <option>Outlet 2</option>
                                                                                    <option>Outlet 3</option>
                                                                                    <option>Outlet 4</option>
                                                                                    <option>Outlet 5</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label>Pilih Outlet</label>
                                                                                <select class="form-control">
                                                                                    <option> --- Pilih Nama Outlet --- </option>
                                                                                    <option>Outlet 1</option>
                                                                                    <option>Outlet 2</option>
                                                                                    <option>Outlet 3</option>
                                                                                    <option>Outlet 4</option>
                                                                                    <option>Outlet 5</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label>Pilih Paket</label>
                                                                                <select class="form-control">
                                                                                    <option> --- Pilih Nama Paket --- </option>
                                                                                    <option>Outlet 1</option>
                                                                                    <option>Outlet 2</option>
                                                                                    <option>Outlet 3</option>
                                                                                    <option>Outlet 4</option>
                                                                                    <option>Outlet 5</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label>Berat</label>
                                                                                <input type="text" name="nama" class="form-control" placeholder="Masukkan Berat">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label>Keterangan</label>
                                                                                <textarea class="form-control" name="" rows="3"></textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer justify-content-between">
                                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                                                                            <button type="submit" class="btn btn-primary">Update</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                    <?php }
                                                }
                                            }
                                        }
                                    } ?>

                                    <div class="modal fade" id="modal-tambah">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Tambah Data Transaksi</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form method="post" action="simpan_transaksi.php">
                                                    <div class="modal-body">
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
                                                            <select name="id_outlet" class="form-control" id="id_outlet" required>
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
                                                            <select class="form-control" name="id_paket" id="id_paket" required>
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
                                                    </div>
                                                    <div class="modal-footer justify-content-between">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
    $('#id_outlet').change(function() {
        var id_outlet = $(this).val();
        $.ajax({
            type: 'POST',
            url: 'ajax_transaksi.php',
            data: 'id_outlet=' + id_outlet,
            success: function(response) {
                $('#id_paket').html(response);
            }
        });
    });
</script>
<?php
include '../layouts/footer.php';
?>
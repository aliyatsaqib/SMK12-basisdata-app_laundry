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
                                <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-tambah"><i class="fas fa-plus"></i> Tambah Data</button>
                            </div>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Nama Member</th>
                                        <th>Jenis Paket</th>
                                        <th>Nama Outlet</th>
                                        <th>Kode Invoice</th>
                                        <th>Berat Cucian</th>
                                        <th>Total Bayar</th>
                                        <th>Status</th>
                                        <th>Ubah Status</th>
                                        <th>Bayar Transaksi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>Nama Transaksi</td>
                                        <td>Alamat Transaksi</td>
                                        <td>Telephone</td>
                                        <td>Telephone</td>
                                        <td>Telephone</td>
                                        <td>Telephone</td>
                                        <td>
                                            <p class="btn btn-default btn-sm">Baru</p>
                                            <p class="btn btn-warning btn-sm">Proses</p>
                                            <p class="btn btn-primary btn-sm">Selesai</p>
                                            <p class="btn btn-success btn-sm">Diambil</p>
                                            <p class="btn btn-success btn-sm">DiBayar</p>
                                            <p class="btn btn-danger btn-sm">Belum DiBayar</p>
                                        </td>
                                        <td><button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-ubah-status"><i class="fas fa-edit"> Ubah</i></button>
                                        </td>
                                        <td>
                                            <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-bayar"><i class="fas fa-edit"> Bayar</i></button>
                                            <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-batalkan"><i class="fas fa-times"> Batalkan</i></button>
                                        </td>
                                        <td>
                                            <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-edit"><i class="fas fa-edit"> Edit</i></button>
                                            <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-hapus"><i class="fas fa-trash"> Hapus</i></button>
                                        </td>
                                    </tr>

                                    <div class="modal fade" id="modal-hapus">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Hapus Data Transaksi</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Apakah anda yakin akan menghapus data ini ... ?</p>
                                                </div>
                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                                                    <a href="hapus_Transaksi.php" class="btn btn-primary">Hapus</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" id="modal-ubah-status">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Ubah Status Transaksi</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form method="post" action="edit_outlet.php">
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label>Pilih Status</label>
                                                            <select class="form-control">
                                                                <option> --- Silahkan Pilih Status --- </option>
                                                                <option>Baru</option>
                                                                <option>Proses</option>
                                                                <option>Selesai</option>
                                                                <option>Diambil</option>
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

                                    <div class="modal fade" id="modal-edit">
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

                                    <div class="modal fade" id="modal-tambah">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Tambah Data Transaksi</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form method="post" action="tambah_Transaksi.php">
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
<?php
include '../layouts/footer.php';
?>
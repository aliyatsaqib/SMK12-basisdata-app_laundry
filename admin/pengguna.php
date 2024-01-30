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
                    <h1 class="m-0">Pengguna</h1>
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
                            <h3 class="card-title">Data Pengguna</h3>

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
                                        <th>Nama</th>
                                        <th>Username</th>
                                        <th>Nama Outlet</th>
                                        <th>Akses</th>
                                        <th style="width: 200px">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>Nama</td>
                                        <td>Username</td>
                                        <td>Nama Outlet</td>
                                        <td>Akses</td>
                                        <td>
                                            <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-edit"><i class="fas fa-edit"> Edit</i></button>
                                            <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-hapus"><i class="fas fa-trash"> Hapus</i></button>
                                        </td>
                                    </tr>

                                    <div class="modal fade" id="modal-hapus">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Hapus Data Pengguna</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Apakah anda yakin akan menghapus data ini ... ?</p>
                                                </div>
                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                                                    <a href="hapus_Pengguna.php" class="btn btn-primary">Hapus</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" id="modal-edit">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Edit Data Pengguna</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form method="post" action="edit_Pengguna.php">
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label>Nama Pengguna</label>
                                                            <input type="text" name="" class="form-control" placeholder="Masukkan Nama Pengguna">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Username</label>
                                                            <input type="text" name="" class="form-control" placeholder="Masukkan Username">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Password</label>
                                                            <input type="password" name="" class="form-control" placeholder="Masukkan Password">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Nama Outlet</label>
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
                                                            <label>Akses</label>
                                                            <select class="form-control">
                                                                <option> --- Silahkan Pilih Akses --- </option>
                                                                <option value="admin">Admin</option>
                                                                <option value="kasir">Kasir</option>
                                                                <option value="owner">Owner</option>
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

                                    <div class="modal fade" id="modal-tambah">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Tambah Data Pengguna</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form method="post" action="tambah_Pengguna.php">
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label>Nama Pengguna</label>
                                                            <input type="text" name="" class="form-control" placeholder="Masukkan Nama Pengguna">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Username</label>
                                                            <input type="text" name="" class="form-control" placeholder="Masukkan Username">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Password</label>
                                                            <input type="password" name="" class="form-control" placeholder="Masukkan Password">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Nama Outlet</label>
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
                                                            <label>Akses</label>
                                                            <select class="form-control">
                                                                <option> --- Silahkan Pilih Akses --- </option>
                                                                <option value="admin">Admin</option>
                                                                <option value="kasir">Kasir</option>
                                                                <option value="owner">Owner</option>
                                                            </select>
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
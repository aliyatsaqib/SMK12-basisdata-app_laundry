<?php
include '../layouts/header.php';
?>
<!-- Content Header (Page header) 
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Laporan Transaksi</h1>
                </div>
            </div>
        </div>
    </div> -->
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container">
        <div class="row">
            <!-- /.col-md-6 -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <td>No Invoice</td>
                                            <td>:</td>
                                            <td>No Invoice</td>
                                            <td>Alamat Member</td>
                                            <td>:</td>
                                            <td>Alamat Member</td>
                                        </tr>
                                        <tr>
                                            <td>Nama Member</td>
                                            <td>:</td>
                                            <td>Nama Member</td>
                                            <td>Telephone Member</td>
                                            <td>:</td>
                                            <td>Telephone Member</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!--<div class="card-tools">
                                <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-tambah"><i class="fas fa-plus"></i> Tambah Data</button>
                            </div> -->

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Nama Member</th>
                                    <th>Jenis Paket</th>
                                    <th>Berat Cucian</th>
                                    <th>Total Bayar</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>Nama Laporan Transaksi</td>
                                    <td>Alamat Laporan Transaksi</td>
                                    <td>Telephone</td>
                                    <td>Telephone</td>
                                    <td>
                                        <p class="btn btn-success btn-sm">Diambil</p>
                                        <p class="btn btn-success btn-sm">DiBayar</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4 text-center">
                                <p>Penerima</p><br><br>
                                <p><b><u>Nama Member</u></b></p>
                            </div>
                            <div class="col-sm-4">

                            </div>
                            <div class="col-sm-4 text-center">
                                <p>Hormat Kami</p><br><br>
                                <p><b><u>Nama Petugas</u></b></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
<script>
    window.addEventListener("load", window.print());
</script>
<?php
?>
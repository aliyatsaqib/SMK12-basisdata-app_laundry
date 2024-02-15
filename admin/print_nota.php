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
<?php
$data = $_GET['id'];
$no = 1;
include "../koneksi.php";
$tb_transaksi = mysqli_query($koneksi, "SELECT * FROM tb_transaksi where id='$data'");
while ($d_tb_transaksi = mysqli_fetch_array($tb_transaksi)) {
    $tb_outlet = mysqli_query($koneksi, "SELECT * FROM tb_outlet where id='$d_tb_transaksi[id_outlet]'");
    while ($d_tb_outlet_d = mysqli_fetch_array($tb_outlet)) {
        $tb_member = mysqli_query($koneksi, "SELECT * FROM tb_member where id='$d_tb_transaksi[id_member]'");
        while ($d_tb_member_d = mysqli_fetch_array($tb_member)) {
            $tb_user = mysqli_query($koneksi, "SELECT * FROM tb_user where id='$d_tb_transaksi[id_user]'");
            while ($d_tb_user_d = mysqli_fetch_array($tb_user)) {
?>
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
                                                            <td><?= $d_tb_transaksi['kode_invoice'] ?></td>
                                                            <td>Alamat Member</td>
                                                            <td>:</td>
                                                            <td><?= $d_tb_member_d['alamat'] ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Nama Member</td>
                                                            <td>:</td>
                                                            <td><?= $d_tb_member_d['nama'] ?></td>
                                                            <td>Telephone Member</td>
                                                            <td>:</td>
                                                            <td><?= $d_tb_member_d['tlp'] ?></td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
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
                                                    <th>Berat Cucian</th>
                                                    <th>Total Bayar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1.</td>
                                                    <td><?= $d_tb_member_d['nama'] ?></td>
                                                    <td><?php
                                                        $tb_paket = mysqli_query($koneksi, "SELECT * FROM tb_paket where id='$d_tb_transaksi[id_paket]'");
                                                        while ($d_tb_paket_d = mysqli_fetch_array($tb_paket)) { ?>
                                                            <?= $d_tb_paket_d['jenis'] ?>
                                                        <?php } ?></td>
                                                    <td><?= $d_tb_transaksi['qty'] ?></td>
                                                    <td> <?php
                                                            if ($d_tb_transaksi['id_paket'] == '0') { ?>
                                                        <?php } else { ?>
                                                            <?php
                                                                $tb_paket = mysqli_query($koneksi, "SELECT * FROM tb_paket where id='$d_tb_transaksi[id_paket]'");
                                                                while ($d_tb_paket_d = mysqli_fetch_array($tb_paket)) {
                                                                    $a = $d_tb_paket_d['harga'];
                                                                }
                                                                $b = $d_tb_transaksi['qty'];
                                                                $c = $d_tb_transaksi['biaya_tambahan'];
                                                                $total = ($a * $b) + $c;
                                                                //echo "Rp. $total";
                                                            ?>
                                                            Rp.<?= number_format($total); ?>
                                                        <?php } ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-4 text-center">
                                                <p>Penerima</p><br><br>
                                                <p><b><u><?= $d_tb_member_d['nama'] ?></u></b></p>
                                            </div>
                                            <div class="col-sm-4">

                                            </div>
                                            <div class="col-sm-4 text-center">
                                                <p>Hormat Kami</p><br><br>
                                                <p><b><u><?= $d_tb_user_d['nama'] ?></u></b></p>
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
<?php }
        }
    }
} ?>
<script>
    window.addEventListener("load", window.print());
</script>
<?php
?>
<?php
// koneksi database
include '../koneksi.php';

//menambahkan data yang dikirim dari form
$id = $_POST['id'];
$id_paket = $_POST['id_paket'];
$qty = $_POST['qty'];
//menginput data ke database
mysqli_query($koneksi,"insert into tb_detail_transaksi values('','$id','$id_paket','$qty','done')");
mysqli_query($koneksi,"update tb_transaksi set dibayar='dibayar' where id='$id'");

//mengalihkan halaman kembali ke outlet.php
header("location:transaksi.php?info=update");
?>

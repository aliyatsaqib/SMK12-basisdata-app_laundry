<?php
// koneksi database
include '../koneksi.php';

//menambahkan data yang dikirim dari form
$id = $_POST['id'];
$belum_dibayar = $_POST['dibayar'];

//menginput data ke database
mysqli_query($koneksi,"update tb_transaksi set dibayar='$belum_dibayar' where id='$id'");

//mengalihkan halaman kembali ke outlet.php
header("location:transaksi.php?info=update");
?>

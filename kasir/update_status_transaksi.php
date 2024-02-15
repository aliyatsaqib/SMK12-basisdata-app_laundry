<?php
// koneksi database
include '../koneksi.php';

//menambahkan data yang dikirim dari form
$id = $_POST['id'];
$status = $_POST['status'];

//menginput data ke database
mysqli_query($koneksi,"update tb_transaksi set status='$status' where id='$id'");

//mengalihkan halaman kembali ke outlet.php
header("location:transaksi.php?info=update");
?>

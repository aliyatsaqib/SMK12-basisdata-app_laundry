<?php
// koneksi database
include '../koneksi.php';

//menambahkan data yang dikirim dari form
$id = $_POST['id'];
$id_paket = $_POST['id_paket'];

//menginput data ke database
mysqli_query($koneksi,"update tb_transaksi set id_paket='$id_paket' where id='$id'");

//mengalihkan halaman kembali ke outlet.php
header("location:transaksi.php?info=update");
?>

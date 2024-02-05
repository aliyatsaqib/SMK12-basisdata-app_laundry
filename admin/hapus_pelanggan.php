<?php
// koneksi database
include '../koneksi.php';

//menambahkan data yang dikirim dari form
$id = $_GET['id'];

//menginput data ke database
mysqli_query($koneksi,"delete from tb_member where id='$id'");

//mengalihkan halaman kembali ke outlet.php
header("location:pelanggan.php?info=hapus");
?>

<?php
// koneksi database
include '../koneksi.php';

//menambahkan data yang dikirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tlp = $_POST['tlp'];

//menginput data ke database
mysqli_query($koneksi,"update tb_outlet set nama='$nama', alamat='$alamat', tlp='$tlp' where id='$id'");

//mengalihkan halaman kembali ke outlet.php
header("location:outlet.php?info=update");
?>

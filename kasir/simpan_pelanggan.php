<?php
// koneksi database
include '../koneksi.php';

//menambahkan data yang dikirim dari form
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tlp = $_POST['tlp'];

//menginput data ke database
mysqli_query($koneksi,"insert into tb_member values('','$nama','$alamat','$jenis_kelamin','$tlp')");

//mengalihkan halaman kembali ke outlet.php
header("location:pelanggan.php?info=simpan");
?>

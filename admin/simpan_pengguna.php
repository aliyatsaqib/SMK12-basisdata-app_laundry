<?php
// koneksi database
include '../koneksi.php';

//menambahkan data yang dikirim dari form
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$id_outlet = $_POST['id_outlet'];
$role = $_POST['role'];

//menginput data ke database
mysqli_query($koneksi,"insert into tb_user values('','$nama','$username','$password','$id_outlet','$role')");

//mengalihkan halaman kembali ke outlet.php
header("location:pengguna.php?info=simpan");
?>

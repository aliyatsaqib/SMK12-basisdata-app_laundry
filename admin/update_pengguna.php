<?php
// koneksi database
include '../koneksi.php';

//menambahkan data yang dikirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$id_outlet = $_POST['id_outlet'];
$role = $_POST['role'];

//menginput data ke database
mysqli_query($koneksi,"update tb_user set nama='$nama', username='$username', password='$password', id_outlet='$id_outlet', role='$role' where id='$id'");

//mengalihkan halaman kembali ke outlet.php
header("location:pengguna.php?info=update");
?>
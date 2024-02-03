<?php
$koneksi = mysqli_connect("localhost","root","","db_laundry");

//check connection
if (mysqli_connect_error()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>
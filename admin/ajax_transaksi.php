<?php
include("../koneksi.php");
$d_id_outlet = $_POST['id_outlet'];
$tampil=mysqli_query($koneksi,"SELECT * FROM tb_paket WHERE id_outlet='$d_id_outlet'");
$jml=mysqli_num_rows($tampil);

if ($jml > 0) {
    while ($r=mysqli_fetch_array($tampil)) {
        ?>
        <option value="<?php echo $r['id'] ?>"><?php echo $r['nama_paket'] ?></option>
        <?php
    }
}else {
    echo "<option selected>- Data Wilayah Tidak Ada, Pilih Yang Lain -</option>";
}
?>
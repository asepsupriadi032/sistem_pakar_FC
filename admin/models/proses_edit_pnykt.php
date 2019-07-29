<?php
ob_start();
require_once('../config/+koneksi.php');
require_once('../models/database.php');
include "../models/datapenyakit.php";

$connection = new Database($host, $user, $password, $database);
$pnykt = new Penyakit($connection);

$kd_penyakit = $connection->conn->real_escape_string($_POST['kd_penyakit']);
$penyakit = $connection->conn->real_escape_string($_POST['penyakit']);
$solusi = $connection->conn->real_escape_string($_POST['solusi']);
$pencegahan = $connection->conn->real_escape_string($_POST['pencegahan']);
$deskripsi = $connection->conn->real_escape_string($_POST['deskripsi']);
$penyebab = $connection->conn->real_escape_string($_POST['penyebab']);

$pict = $_FILES ['gambar']['name'];
$extensi = explode(".", $_FILES['gambar']['name']);
$gambar = "gbr-".round(microtime(true)).".".end($extensi);
$sumber = $_FILES['gambar']['tmp_name'];

if($pict==''){
    $artikel->edit("UPDATE tbl_penyakit SET penyakit = '$penyakit', solusi = '$solusi', pencegahan = '$pencegahan', deskripsi = '$deskripsi', penyebab = '$penyebab' WHERE kd_penyakit = '$kd_penyakit' ");
    header("location:../?page=penyakit");
}else {
    $gbr_awal = $pnykt->tampil($kd_penyakit)->fetch_object()->gambar;
    unlink("../assets/img/".$gbr_awal);

    $upload = move_uploaded_file($sumber, "../assets/img/".$gambar);
    if($upload){
        $pnykt->edit("UPDATE tbl_penyakit SET penyakit = '$penyakit', solusi = '$solusi', pencegahan = '$pencegahan', deskripsi = '$deskripsi', penyebab = '$penyebab', gambar = '$gambar' WHERE kd_penyakit = '$kd_penyakit' ");
        echo "<script>window.location='?page=penyakit';</script>";
    }else{
        echo "<script>alert('Upload gambar gagal!')</script>";
    }
}
?>
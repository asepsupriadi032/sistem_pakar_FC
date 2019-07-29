<?php
ob_start();
require_once('../config/+koneksi.php');
require_once('../models/database.php');
include "../models/DataHasil.php";

$connection = new Database($host, $user, $password, $database);
$hsl = new Hasil($connection);

$id_pasien = $_POST['id_hasil'];
$nama_anak = $connection->conn->real_escape_string($_POST['nama_anak']);
$usia_anak = $connection->conn->real_escape_string($_POST['usia_anak']);
$jk_anak = $connection->conn->real_escape_string($_POST['jk_anak']);

if($jk_anak){
    $hsl->edit("UPDATE data_pasien SET nama_anak = '$nama_anak', usia_anak = '$usia_anak', jk_anak = '$jk_anak' WHERE id_pasien = '$id_pasien'");
 echo"<script>window.location='?page=hasil';</script>";
  }else {
    echo"<script>alert('Data Gagal Diperbaharui!')</script>";
  }
 
?>
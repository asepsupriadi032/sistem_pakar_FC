<?php
ob_start();
require_once('../config/+koneksi.php');
require_once('../models/database.php');
include "../models/DataRelasi.php";

$connection = new Database($host, $user, $password, $database);
$rls = new Relasi($connection);

$kd_relasi = $_POST['kd_relasi'];
$kd_penyakit = $connection->conn->real_escape_string($_POST['kd_penyakit']);
$kd_gejala = $connection->conn->real_escape_string($_POST['kd_gejala']);

if($Relasi){
    $rls->edit("UPDATE tbl_relasi SET kd_penyakit = '$kd_penyakit', kd_gejala = '$kd_gejala' WHERE kd_relasi = '$kd_relasi'");
 echo"<script>window.location='?page=relasi';</script>";
  }else {
    echo"<script>alert('Data Gagal Diperbaharui!')</script>";
  }
 
?>
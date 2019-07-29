<?php
ob_start();
require_once('../config/+koneksi.php');
require_once('../models/database.php');
include "../models/datagejala.php";

$connection = new Database($host, $user, $password, $database);
$gjl = new Gejala($connection);

$id_gejala = $_POST['id_gejala'];
$kd_gejala = $connection->conn->real_escape_string($_POST['kd_gejala']);
$gejala = $connection->conn->real_escape_string($_POST['gejala']);

if($gejala){
    $gjl->edit("UPDATE tbl_gejala SET gejala = '$gejala' WHERE kd_gejala = '$kd_gejala'");
 echo"<script>window.location='?page=gejala';</script>";
  }else {
    echo"<script>alert('Data Gagal Diperbaharui!')</script>";
  }
 
?>
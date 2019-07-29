<?php
require_once('../config/+koneksi.php');
require_once('../models/database.php');
include "../models/datarule.php";

$connection = new Database($host, $user, $pass, $database);
$aturan = new datarule ($connection);

$id_rule = $_POST['id_rule']; 
// $kd_gejala = $connection->conn->real_escape_string($_POST['kd_gejala']);
$pertanyaan = $connection->conn->real_escape_string($_POST['pertanyaan']);
$if_Ya = $connection->conn->real_escape_string($_POST['if_Ya']);
$if_Tidak = $connection->conn->real_escape_string($_POST['if_Tidak']);

if($if_Tidak){
    $aturan->edit("UPDATE tbl_rule SET kd_gejala = '$kd_gejala', pertanyaan = '$pertanyaan', if_Ya = '$if_Ya', if_Tidak = '$if_Tidak' WHERE id_rule = '$id_rule' ");
    echo "<script>window.location='?page=rule';</script>";
}else {

}

?>
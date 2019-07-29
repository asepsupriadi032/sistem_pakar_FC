<?php
ob_start();
require_once('../config/+koneksi.php');

$conn   = mysqli_connect("localhost","root","","sistempakar");
$query= mysqli_query($conn, "SELECT * FROM saran_user") or die("Failed to query database".mysql_error());;

$nama = $_POST['nama'];
$email = $_POST['email'];
$no_handphone = $_POST['no_handphone'];
$pesan = $_POST['pesan'];

mysql_connect("localhost", "root", "");
mysql_select_db("sistempakar");
$query="INSERT INTO saran_user VALUES('','$nama','$email','$no_handphone','$pesan')";

$hasil = mysql_query($query);
if($hasil){
    echo "input berhasil";
}else{
    echo "input gagal";
}
?>
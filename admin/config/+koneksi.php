<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "sistempakar";

$conn = mysqli_connect($host, $user, $password, $database);

if(!$conn) {
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}else{
    //echo "berhasil";
}

?>
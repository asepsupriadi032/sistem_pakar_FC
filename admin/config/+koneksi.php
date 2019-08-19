<?php

$host = "localhost";
$user = "id10524213_lailla";
$password = "pakarbalita123";
$database = "id10524213_sistempakar";

$conn = mysqli_connect($host, $user, $password, $database);

if(!$conn) {
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}else{
    //echo "berhasil";
}

?>
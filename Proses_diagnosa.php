<?php
session_start();
    // include("admin/config/+koneksi.php");

    $host = "localhost";
    $user = "id10524213_lailla";
    $password = "pakarbalita123";
    $database = "id10524213_sistempakar";

    $conn = mysqli_connect($host, $user, $password, $database);

    $total=$_POST['total'];
    $gejalaPasien = $_POST['gejalaPasien'];


    $sql = mysqli_query($conn, "SELECT * FROM tbl_gejala ORDER BY kd_gejala ASC");

    $no = 1;
    $id_pasien = $_SESSION['id_pasien']; 
    while($row = mysqli_fetch_array($sql)){
        
        $kd_gejala = $row['kd_gejala'];
        if(!isset($gejalaPasien[$no])){
            // echo $kd_gejala; exit();
            $insertSql = mysqli_query($conn, "INSERT INTO diagnosa_pasien VALUES ('','$id_pasien','$kd_gejala','0')"); 
            // exit;
            // echo $kd_gejala;
        }else{
            $insertSql = mysqli_query($conn, "INSERT INTO diagnosa_pasien VALUES ('','$id_pasien','$kd_gejala','$gejalaPasien[$no]')");
            // echo $gejalaPasien[$no]."<br>";
        }
        $no++;
    }

    header('Location: Hasil_diagnosa.php');
    
?>
<?php
session_start();
    // include("admin/config/+koneksi.php");

    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "sistempakar";

    $conn = mysqli_connect($host, $user, $password, $database);

    // var_dump($_POST['nama_anak']); exit();

    $nama_anak = $_POST['nama_anak'];
    $usia_anak = $_POST['usia_anak'];
    $jk_anak = $_POST['jk_anak'];

    $inputProses = mysqli_query($conn,"INSERT INTO data_pasien VALUES ('','$nama_anak','$usia_anak','$jk_anak')");

    if($inputProses){

        $tgl = date('d');
        $bulan = date('m');
        $tahun = date('y');
        $last_id = mysqli_insert_id($conn);

        // $totalCar = count($last_id);
        // $digit = 3;
        // // for($i=1;$i<=$totalCar;$i++){

        // // }

        $kd_pasien = "PSN".$tgl.$bulan.$tahun.$last_id;

        $_SESSION['kd_pasien']=$kd_pasien;
        $_SESSION['nama_anak']=$nama_anak;
        $_SESSION['id_pasien']=$last_id;

        // echo $_SESSION['kd_pasien']; exit();

        header('Location: diagnosa.php');
    }else{
        echo "rasd";
    }
?>
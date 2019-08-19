<?php
session_start();

    $host = "localhost";
    $user = "id10524213_lailla";
    $password = "pakarbalita123";
    $database = "id10524213_sistempakar";

    $conn = mysqli_connect($host, $user, $password, $database);

    $nama_anak = $_POST['nama_anak'];
    $usia_anak = $_POST['usia_anak'];
    $jk_anak = $_POST['jk_anak'];

    $inputProses = mysqli_query($conn,"INSERT INTO data_pasien VALUES ('','$nama_anak','$usia_anak','$jk_anak')");

    if($inputProses){

        $tgl = date('d');
        $bulan = date('m');
        $tahun = date('y');
        $last_id = mysqli_insert_id($conn);

        $kd_pasien = "PSN".$tgl.$bulan.$tahun.$last_id;

        $_SESSION['kd_pasien']=$kd_pasien;
        $_SESSION['nama_anak']=$nama_anak;
        $_SESSION['id_pasien']=$last_id;

        header('Location: diagnosa.php');
    }else{
        echo "rasd";
    }
?>
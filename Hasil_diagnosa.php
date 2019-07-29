<?php session_start(); 
include "admin/config/+koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Diagnosa</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">
    
    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    
    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">
</head>
<?php
include 'header.php';
?>

<style>
    /* registrasi */
    #registrasi .container{
        width: 700px;
        border: 2px solid;
        margin-bottom: 20px;
        margin-top :20px;
        color: #0d7913;
        padding-right: 20px;
        padding-left: 20px;
        padding-bottom: 30px;
        
        
        
    }
    #btn{
        background-color: tomato;
        color:white;
    }
    #radio{
        margin: 10px;
    }
    
    .rataKanan{
        width:100%;
        /* border:thin solid; */
        padding-right:10px;
        align:right;
    }
    
    .pasien{
        border: thin solid #0d7913;
        width: 20%;
        padding: 5px;
        background-color: #75c298;
        color:#000000;
    }
</style>

<body id="body">
    <div id ="registrasi">
        <?php
        $id_pasien =  $_SESSION['id_pasien'];
        
        $sql_pasien = mysqli_query($conn, "SELECT * FROM data_pasien WHERE id_pasien='$id_pasien'");
        $rowPasien = mysqli_fetch_object($sql_pasien);
        $no=1;
        
        ?>
        <div class="row">  
            <div class="col-md-12 text-right" style="padding:20px; margin-right:200px;">
                <a href="print.php"style="margin-left:20px; border:thin solid; padding:5px; align:right" target="_blank">Print</a>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-4">
                <h4 style="margin-left:20px;">Data Pasien:</h4>
                <div   style="margin:20px; border:thin dashed green; padding:15px; ">
                    <div class="row">
                        <div class="col-md-6">
                            Nama Anak
                        </div>
                        <div class="col-md-6">
                            : <?php echo $rowPasien->nama_anak ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            Usia Anak
                        </div>
                        <div class="col-md-6">
                            : <?php echo $rowPasien->usia_anak ?> Tahun
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            Jenis Kelamin
                        </div>
                        <div class="col-md-6">
                            : <?php echo $rowPasien->jk_anak ?>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="col-md-5">
                <h4>Gejala:</h4>
                <ol>
                    <?php 
                    // $arrayPasien= [];
                    $dataPasien= "";
                    $sql = mysqli_query($conn, "SELECT * FROM diagnosa_pasien  LEFT JOIN tbl_gejala ON tbl_gejala.kd_gejala=diagnosa_pasien.kd_gejala WHERE id_pasien='$id_pasien' and gejala_pasien !='0'");
                    while($row = mysqli_fetch_array($sql)){
                        // $arrayPasien[] = $row['gejala'];
                        $dataPasien .= $row['kd_gejala'];
                        
                        ?>
                        
                        <li><?php echo $row['gejala'] ?></li>
                        <?php 
                        $no++;
                    }
                    ?>
                </ol>
            </div>
        </div>
        <?php 
        $hasil = [];
        $no=0;
        $sqlPenyakit = mysqli_query($conn, "SELECT * FROM tbl_penyakit");
        while($row = mysqli_fetch_array($sqlPenyakit)){//mengambil data penyakit
            
            
            $sqlRelasi = mysqli_query($conn, "SELECT * FROM tbl_relasi where kd_penyakit='$row[kd_penyakit]'");
            $i=0;
            while($row2 = mysqli_fetch_array($sqlRelasi)){//mengambil relasi penyakit dengan gejala
                $gejala[$no][$i]= $row2['kd_gejala'];//membuat array gejala berdasarkan penyakit
                $i++;
            }
            $gejalaPenyakit[$no] = implode($gejala[$no]); //membuat string dari array gejala
            $penyakit[$no] = $row['penyakit'];//mambuat array penyakit, solusi, dan pencegahan untuk view hasil
            $solusi[$no] = $row['solusi'];
            $pencegahan[$no] = $row['pencegahan'];
            $no++;
        }
        
        $jumlahPenyakit = count($penyakit);//menghitung total penyakit
        //membuat default hasil jika tidak ada yg sesuai dengan tabel relasi
        $hasilDiagnosa = "Silahkan Melakukan pemeriksaan lebih lanjut ke Rumah Sakit Terdekat.";
        $hasilSolusi = "-";
        $hasilPencegahan = "-";
        for ($i=0; $i < $jumlahPenyakit; $i++) { 
            if($dataPasien == $gejalaPenyakit[$i]){//cek gejala pasien dengan gejala penyakit
                // if($hasilDiagnosa == ""){
                    $hasilDiagnosa = $penyakit[$i];
                    $hasilSolusi = $solusi[$i];
                    $hasilPencegahan = $pencegahan[$i];
                    // }
                }
            }                   
            
            ?>
            <div class="row"  style="margin-left:20px;">
                <div class="col-md-3">
                    <h4><u><i>Hasil Diagnosa</i></u></h4>
                    <?php echo $hasilDiagnosa; ?>
                </div>
                <div class="col-md-4">
                    <h4><u><i>Solusi:</i></u></h4>
                    <?php echo $hasilSolusi; ?>
                </div>
                <div class="col-md-4">
                    <h4><u><i>Pencegahan: </i></u></h4>
                    <?php echo $hasilPencegahan; ?>
                </div>
            </div>
            
            
        </div>
    </body>
    <br><br><br><br>
    
    <?php
    include 'footer.php'
    ?>
    
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    
    
</body>

</html>

<!-- JavaScript Libraries -->
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/jquery/jquery-migrate.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/superfish/hoverIntent.js"></script>
<script src="lib/superfish/superfish.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>

<script src="lib/sticky/sticky.js"></script>
<!-- Contact Form JavaScript File -->
<script src="contactform/contactform.js"></script>

<!-- Template Main Javascript File -->
<script src="js/main.js"></script>
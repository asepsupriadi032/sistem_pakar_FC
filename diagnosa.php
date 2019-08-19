<?php session_start(); 
    include "admin/config/+koneksi.php";
if(@$_GET['act'] == '') { ?>
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
            margin-top :75px;
            /* color: #0d7913; */
            color: #8a1f04;
            padding-right: 20px;
            padding-left: 20px;
            padding-bottom: 30px;   
            background-color: #cacaca;
            opacity:0.8;
            margin-right: 400px;
            margin-left: 330px;
        }

        .form-group{
            font-family: Verdana;
            font-size: 16px;
        }
        body{
            background:url('img/heart.jpg');
            background-size: cover;
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

        .border1{
            border: thin solid;
        }
        .costumRegister{
            width:45%;
            border: 2px solid;
            margin-top :75px;
            /* color: #0d7913; */
            color: #8a1f04;  
            background-color: #cacaca;
            opacity:0.8;
            padding:10px;
        }
    </style>
    
    <body>
        <div id ="registrasi">
            <?php if(!empty($_SESSION['id_pasien'])){ ?>
                <div class="rataKanan" align="right">
                    <div class="pasien">
                        <?php 
                        echo "ID Pasien: ".$_SESSION['kd_pasien'];
                        ?><br>
                        <?php 
                        echo "Nama : ".ucwords($_SESSION['nama_anak']);
                        ?>
                    </div>
                </div>
                <?php } ?>
                <?php if(empty($_SESSION['id_pasien'])){ ?>
                    
                     <form action="Proses_register.php" method="post" enctype="multipart/form-data">
                        <div class='row'>
                            <div class="col-md-12">
                            <center>
                            <div class="costumRegister">
                                <h1 style="margin-bottom:50px;"><center><strong>Registrasi Pasien</strong></center></h1><div class="form-group text-justify">
                                    <label class="control-label" for="nama_anak"><i class="fa fa-child"></i> Nama Anak*</label>
                                    <input type="text" class="form-control" id="nama_anak" placeholder="Masukkan nama anak" name="nama_anak" required>
                                </div>

                                <div class="form-group text-justify">
                                    <label class="control-label" for="usia_anak"><i class="fa fa-user-plus"></i> Usia Anak* </label>
                                    <input type="text" class="form-control" id="usia_anak" placeholder="Masukkan usia anak" name="usia_anak" required>
                                </div>
                                
                                <div class="form-group text-justify">
                                    <label for="jk_anak"><i class="fa fa-user"></i> Jenis Kelamin</label><br>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" for="radio1">
                                            <input type="radio" class="form-check-input" id="radio" name="jk_anak" id="radio1" value="laki-laki" style="margin-right:5px">Laki-laki
                                        </label><br>
                                        <label class="form-check-label" for="radio2">
                                            <input type="radio" class="form-check-input" id="radio" name="jk_anak" id="radio2" value="perempuan" style="margin-right:5px">Perempuan
                                        </label>
                                    </div>
                                </div>
                                <input type="submit" style="margin-top:2%"  class="btn btn-outline-primary" id="btn" name="submit" value="MULAI DIAGNOSA"></center>                         
                            </div>
                            </center>
                            </div>
                        </div>
                    </form>
                    <?php
                }else{
                    ?>
                    <form action="Proses_diagnosa.php" method="post">
                        <div class='row'>
                            <div class="col-md-12">
                            <center>
                            <div class="costumRegister">
                            <h1 style="margin-bottom:50px;"><center><strong>DAFTAR GEJALA</strong></center></h1>
                            <h4><center>Silahkan Pilih Gejala yang Sesuai dengan Kondisi Anak</center></h4>
                            <?php 
                            $getGejala = mysqli_query($conn, 'SELECT * FROM tbl_gejala ORDER BY kd_gejala asc');
                            $no=1;
                            $total = mysqli_num_rows($getGejala);
                            while($row = mysqli_fetch_array($getGejala)){
                                ?>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Checkbox for following text input" name="gejalaPasien[<?php echo $no ?>]" id="gejalaPasien[<?php echo $no ?>]" value="<?php echo $row['kd_gejala'] ?>">
                                        </div>
                                    </div>
                                    <span class="form-control text-justify" style="background: #e9ecef;">
                                        <?php echo $no.". ".$row['gejala'] ?>
                                    </span>
                                </div>
                                <?php
                                $no++;
                            }
                            ?>
                            <input type="hidden" value="<?php echo $total ?>" name="total">
                            <input type="submit" class="btn btn-primary" value="Diagnosa" >
                        </div>
                    </div>
                        </center>
                        </div>
                    </div>
                    </form>
                    <?php
                }
                ?>
            </div>
        </body>
        <br><br><br><br>
        
    <?php
    include 'footer.php'
    ?>

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        
    </body>
    
    </html>
    <?php
} 

    ?>
    <!-- JavaScript Libraries
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/superfish/hoverIntent.js"></script>
    <script src="lib/superfish/superfish.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    
    <script src="lib/sticky/sticky.js"></script>
    Contact Form JavaScript File
    <script src="contactform/contactform.js"></script>
    
    Template Main Javascript File
    <script src="js/main.js"></script>
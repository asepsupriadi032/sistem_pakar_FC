<?php session_start();
include "admin/config/+koneksi.php";

?>
<?php 
   
    if(isset($_POST['submit'])){
        // print_r($_POST);die();
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $no_handphone = $_POST['no_handphone'];
        $pesan = $_POST['pesan'];

        $sql=mysqli_query($conn, "INSERT INTO saran_user VALUES ('', '$nama', '$email', '$no_handphone', '$pesan')");
        
            //  echo "<script>alert('TERIMAKASIH');</script>";
            header("Location: index.php");
        // } else{
        //     header('Location: saran.php');
        // }
    }
        
    

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Kritik dan Saran </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">


    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700"
        rel="stylesheet">

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
        /* saran */
        #saran .container{
            width: 700px;
            border: 2px solid;
            margin-bottom: 20px;
            margin-top :20px;
            color: #8a1f04;
            padding-right: 20px;
            padding-left: 20px;
            padding-bottom: 30px;  
            background-color: #cacaca;
            opacity:0.8;
            margin-right: 400px;
            margin-left: 570px; 
        }

        .form-group{
            font-family: Verdana;
            font-size: 16px;
        }

        body{
            background:url('img/saran.jpg');
            background-size: 900px;
            background-repeat: no-repeat;
        }

        #btn{
            background-color: tomato;
            color:white;
        }

    </style>

    <body>
        <div id ="saran">
            <div class="col-sm-12 padding-right">
                <div class="container">
                    <h1 style="margin-bottom:50px;"><center><strong>Kritik dan Saran</strong></center></h1>
                    <form method="post" enctype="multipart/form-data" action="">
                        <div class="form-group">
                            <label><i class="fa fa-user"></i> Nama*</label>
                            <input type="text" class="form-control" name="nama" value="" required>
                        </div>
                        <div class="form-group">
                            <label><i class="fa fa-envelope"></i> Email*</label>
                            <input type="text" class="form-control" name="email" value="" required>
                        </div>
                        <div class="form-group">
                            <label><i class="fa fa-phone"></i> No. Handphone</label>
                            <input type="integer" class="form-control" name="no_handphone" value="">
                        </div>
                        <div class="form-group">
                            <label><i class="fa fa-sticky-note"></i> Kritik dan Saran*</label>
                            
                            <input type="hidden" name="redirect_to" value="index.php" id="" required>
                            <textarea class="form-control" name="pesan" rows="2"> </textarea> 
                        </div>
                        <br>
                    <center><input type="submit" style="margin-top:2%"  class="btn btn-outline-primary" id="btn" name="submit" value="KIRIM"></center>
                    </form>
                </div>
            </div>
        </div>
        
        <br>

        <?php
        include 'footer.php'
        ?>

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

</body>


</html>
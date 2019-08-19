<?php
session_start();
include "admin/config/+koneksi.php";
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Selamat Datang</title>
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
<style>
.modal-dialog {
    max-width: 70% !important;
    margin: 1.75rem auto !important;
}
</style>
<body id="body">

<?php
include 'header.php';
?>
<br>

    <!--==========================
    Intro Section
    ============================-->
    <section id="intro">

        <div class="intro-content">
            <h2>SELAMAT DATANG<br><h3>DIAGNOSA PENYAKIT UMUM PADA BALITA</h3></h2>
        </div>

        <div id="intro-carousel" class="owl-carousel">
            <div class="item" style="background-image: url('img/slide1.jpg');"></div>
            <div class="item" style="background-image: url('img/slide2.jpg');"></div>
            <div class="item" style="background-image: url('img/slide4.jpg');"></div>
        </div>

    </section><!-- #intro -->

    <!-------------------------------------------------->
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <main id="main">
        <section id="info" class="info-bestseller">
            <div class="container">
                <div class="section-header">
                    <h2><center>INFORMASI</center></h2>
                   
                   <?php
                        $sql= mysqli_query($conn, "SELECT * FROM tbl_penyakit ORDER BY penyakit ASC");
                        while($row=mysqli_fetch_array($sql)){
                   ?>

                    <div class="card" style="width: 19rem;">
                        <img class="card-img-top" height="150px" src="img/<?php echo $row['gambar']; ?>" alt="<?php echo $row['penyakit']; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['penyakit']; ?></h5>
                            
                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#<?php echo $row['penyakit']; ?>">Detail Penyakit</a>
                        </div>
                        <br>
                    </div>

                    <?php } ?>
                </div>
            </div>
        </section>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <?php
            $sql= mysqli_query($conn, "SELECT * FROM tbl_penyakit ORDER BY penyakit ASC");
            while($row=mysqli_fetch_array($sql)){
                
        ?>

        <div class="modal fade bd-example-modal-xl" id="<?php echo $row['penyakit']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel"><strong><?php echo $row['penyakit']; ?></strong></h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <h5 style = "color:#0039ff; font-weight:bold">Deskripsi Penyakit</h5>
                    <?php echo $row['deskripsi']; ?>
                    <hr>
                    <h5 style = "color:#0039ff; font-weight:bold">Penyebab Penyakit</h5>
                    <?php echo $row['penyebab']; ?>
                    <hr>
                    <h5 style = "color:#0039ff; font-weight:bold">Pencegahan Penyakit</h5>
                    <?php echo $row['pencegahan']; ?>
                </div>
            </div>
        </div>
    </div> <?php } ?>

    <?php
    include 'footer.php'
    ?>

</body>
</html>
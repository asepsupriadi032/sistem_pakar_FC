<?php
ob_start();
session_start();
require_once('config/+koneksi.php');
require_once('models/database.php');

$connection = new Database($host, $user, $password, $database);
if(!isset($_SESSION['admin']))
{
  echo "<script>alert('Anda Harus LOGIN');</script>";
  echo "<script>location = 'login.php';</script>";
  header('location:login.php');
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Halaman Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/dataTables/datatables.min.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="assets/css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
  </head>

  <body>

    <div id="wrapper">
      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="">Sistem Pakar</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar--collapse">
          <ul class="nav navbar-nav side-nav">
            <li><a href="?page=dashboard"><i class="fa fa-home"> </i> Dashboard</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i> Data Master<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="?page=penyakit">Data Penyakit</a></li>
                <li><a href="?page=gejala">Data Gejala</a></li>
                <li><a href="?page=relasi">Data Relasi</a></li>
                </ul>
            </li>
            <li><a href="index.php?page=hasil"><i class="fa fa-book"></i> Hasil Diagnosa</a></li>
            <li><a href="index.php?page=saran_user"><i class="fa fa-edit"></i> Saran User</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
                <a href="index.php?page=logout" class="btn btn-success">Logout</a>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>

      <div id="page-wrapper">

      <?php
      if(@$_GET['page'] == 'dashboard' || @$_GET['page'] == ''){
        include "views/dashboard.php";
      } else if (@$_GET['page'] == 'penyakit') {
        include "views/penyakit.php";
      } else if (@$_GET['page'] == 'gejala') {
        include "views/gejala.php";
      }else if (@$_GET['page'] == 'saran_user') {
        include "views/saran_user.php";
      } else if (@$_GET['page'] == 'relasi') {
        include "views/Relasi.php";
      } else if (@$_GET['page'] == 'hasil') {
        include "views/Hasil_Diagnosa.php";
      } elseif (@$_GET['page'] == 'logout') {
        include 'logout.php';
      }
      ?>

      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/dataTables/datatables.min.js"></script>
    <script type="text/javascript">
      $(document).ready( function () {
        $('#datatables').DataTable();
      });
    </script>

  </body>
</html>
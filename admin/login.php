<?php
session_start();
//skrip koneksi
$koneksi = new mysqli("localhost","id10524213_lailla","pakarbalita123","id10524213_sistempakar");
?>
<!DOCTYPE xhtml>
<xhtml lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 ">
				<form class="login100-form validate-form" method="post">
					<span class="login100-form-title p-b-30">
						<span class="fa fa-laptop"></span>
						<b>Login</b><br>
						<hr>
					</span>

						<label>USERNAME</label>
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Valid email is required: ex@abc.xyz">
					
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="fa fa-user"></span>
						</span>
					</div>
					<label>PASSWORD</label>
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="fa fa-lock"></span>
						</span>
					</div>
					
					<div class="container-login100-form-btn p-t-25">
						<button class="login100-form-btn" name="admin">
						<b>Login</b>
						</button>
						        <?php
         if (isset($_POST['admin']))
         {
          $ambil= $koneksi->query("SELECT * FROM admin WHERE username='$_POST[email]' 
            AND PASSWORD='$_POST[pass]'");	
          $yangcocok = $ambil->num_rows;
          if($yangcocok==1)
          {
            $_SESSION['admin']=$ambil->fetch_assoc();
            echo "<div class='alert alert-info'>Login Sukses </div>";
            echo "<meta http-equiv='refresh' content='1;url=index.php'>";
          }
          else
          {
            echo "<div class='alert alert-danger'> Login Gagal! </div>";
            echo "<meta http-equiv='refresh' content='1;url=login.php'>";
          }
         }
         ?>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</xhtml>
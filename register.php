<?php

session_start();

if (isset($_SESSION['nama'])) {
	header("location: dash.php");
}



include 'backend/function.php';

if (isset($_POST["submit"])) {
	if (registrasi($_POST) > 0) {
		echo "<script>
				alert('registrasi berhasil');
				document.location.href = 'index.php';
			</script>";
	}
}

?>




<!DOCTYPE html>
<html>

<head>
	<title>Animated Login Form</title>
	<!-- <link rel="stylesheet" type="text/css" href="css/style2.css"> -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style/register.css" />
</head>

<body>

	<img class="wave" src="img/Login-bg.png">

	<div class="login-content">

		<form action="" method="post">
			<img src="img/User-icon.png">
			<h3>Masukan data diri dengan benar!</h3>

			<div class="input-div one">
				<div class="i">
					<i class="fas fa-user"></i>
				</div>
				<div class="div">
					<h5>Username</h5>
					<input type="text" class="input" name="username">
				</div>
			</div>
			<div class="input-div nis">
				<div class="i">
					<i class="fas fa-lock"></i>
				</div>
				<div class="div">
					<h5>NIS</h5>
					<input type="text" class="input" name="nis">
				</div>
			</div>

			<div class="input-div rombel">
				<div class="i">
					<i class="far fa-smile"></i>
				</div>
				<div class="div">
					<h5>Rombel</h5>
					<input type="text" class="input" name="rombel">
				</div>
			</div>

			<div class="input-div email">
				<div class="i">
					<i class="fas fa-star"></i>
				</div>
				<div class="div">
					<h5>Rayon</h5>
					<input type="text" class="input" name="rayon">
				</div>
			</div>



			<input type="submit" class="btn" value="Daftar" name="submit">


		</form>
	</div>
	</div>
	<script type="text/javascript" src="js/main.js"></script>
</body>

</html>
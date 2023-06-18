<?php
session_start();

if (isset($_SESSION['nama'])) {
	header("location: dash.php");
}

require 'backend/function.php';

if (isset($_POST["submit"])) {

	$username = $_POST["username"];
	$nis = $_POST["nis"];

	$result = mysqli_query($conn, "SELECT * FROM datadiri WHERE nama = '$username' && nis = '$nis' ");

	if (mysqli_num_rows($result) === 1) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['nama'] = $row['nama'];
		$_SESSION['id'] = $row['id'];
		header("location: dash.php");
	} else {
		echo "<script>
		alert('Username atau NIS anda salah, silahkan coba kembali')
		</script>";
	}
}
?>



<!DOCTYPE html>
<html>

<head>
	<title>Animated Login Form</title>
	<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style/main.css" />
</head>

<body>

	<img class="wave" src="img/Login-bg.png">

	<div class="container">
		<div class="img">
			<div class="text1">
				<h1>WeLend</h1>
				<p>Peminjaman Menjadi lebih mudah</p>
			</div>
			<img src="img/undraw_real_time_sync_re_nky7.svg">
		</div>

		<div class="login-content">

			<form action="" method="post">
				<img src="img/undraw_drink_coffee_jdqb.svg">
				<h3>Silahkan Login terlebih dahulu</h3>
				<!-- <h2 class="title">Welcome</h2> -->
				<div class="input-div one">
					<div class="i">
						<i class="fas fa-user"></i>
					</div>
					<div class="div">
						<h5>Username</h5>
						<input type="text" class="input" name="username">
					</div>
				</div>
				<div class="input-div pass">
					<div class="i">
						<i class="fas fa-lock"></i>
					</div>
					<div class="div">
						<h5>NIS</h5>
						<input type="text" class="input" name="nis">
					</div>
				</div>
				<input type="submit" class="btn" value="Login" name="submit">
				<p class="link">belum punya akun? <a href="register.php">Daftar</a></p>
		</div>
		</form>

	</div>
	<script type="text/javascript" src="js/main.js"></script>
</body>

</html>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="index.css">
	<br/>
</head>
<body>
	
	<h2 class="title">Halaman Admin</h2>
	

	<!-- cek apakah sudah login -->
	<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../admin/index.php?pesan=belum_login");
	}
	?>

<div class="main">

	<div class="masuk"><h4>Selamat datang, <?php echo $_SESSION['username']; ?>! anda telah login.</h4></div>

	<br/>
	<br/>
	
	<div><ul class="crud"><li><a href="/../CRUD/index.php">CRUD</a></li></ul></div>

	<div><ul class="calc"><li><a  href="/../kalkulator/index.php">Kalkulator</a></li></ul></dir>

	<div><ul class="logout"><li><a  href="logout.php">LOGOUT</a></li></ul></div>
	</div>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title>SNMPTN Beasiswa Online</title>
	<!-- <link rel="stylesheet" type="text/css"	href="assets/css/bootstrap.min.css"> -->
	<link rel="stylesheet" type="text/css"	href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css"	href="assets/css/signin.css">
</head>

<body class="text-center">
	<style>body{
	background-image: url("assets/img/bg.jpg");
	background-size: 18%;
	background-repeat: repeat;
	}
	p{
		font-size: 1.2vw;
	}
	</style>
	<form class="form-signin border border-info bg-light" action="act/proses_login.php" method="POST">
		<img class="mb-4" src="assets/img/snmptn.png" alt="Logo SMKN 1 Gedangan" width="80" height="100">
		<h2 class="h2 mb-3 font-weight-normal text-primary">Selamat Datang</h2>
		<p class="text-sm-center text-capitalize">Website ini berguna untuk melihat data siswa yang mendapat beasiswa SNMPTN. Sebelum anda dapat melihat anda harus login dulu.</p>
		<input type="text" name="username" placeholder="Masukkan Username" class="form-control" autofocus="">
		<input type="password" name="password" placeholder="Masukkan Password" class="form-control">
		<br>
		<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
	</form>

</body>
</html>

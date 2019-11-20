<?php 
	include '/../admin/cek_login.php';
	session_start();
	if($_SESSION['status']!="login"){
		header("location:/../admin/index.php?pesan=belum_login");
	}
	?>

<!DOCTYPE html>
<html>
<head>
	<title>Form lamaran kerja :v </title>

</head>
<body>
	
	<h3>Hari ini tanggal <?php echo date("l, d-M-Y") ?>.</h3>
	
	<form action="formsimpan.php" method="POST">
	
	<table border="0px" > 
		
		<br><br><br><br>
		<tr rowspan="3">Form Lamaran Kerja :3 <br><br>	
			<td>Nomor</td>
		<td> : </td>
		<td><input type="text" name="no"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td> : </td>
		<td><input type="text" name="name"></td>
		</tr>
			<td>Kota</td>
			<td> : </td>
		<td><input type="text" name="kota"></td>
		</tr>
			<td>Provinsi</td>
			<td> : </td>
		<td><input type="text" name="provinsi"></td>
		</tr>
			<td>Negara</td>
			<td> : </td>
		<td><input type="text" name="negara"></td>
		</tr>
		<tr>
		<td><input type="button" value="Tampilkan DB" onclick="window.location.href='tampil.php'" /></td>
		<td></td>			
		<td colspan="3"><input type="submit" name="simpan" value="Simpan"></td>
		</tr>


	</table>
	</form>
	<p>Ingin Logout? klik <a href="/../admin/admin/logout.php">Logout</a></p>

	<p>Ingin bermain dengan Aritmatika PHP? klik <a href="/../kalkulator/index.php">Disini</a></p>
</body>
</html>

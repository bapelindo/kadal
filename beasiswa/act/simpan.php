<?php 

include '../koneksi.php';

switch ($_GET['act']) {
	case "tambah_siswa":
		// code...
	$NISN = $_POST['NISN'];
		
	$nama_siswa = $_POST['nama_siswa'];

	$tempat_lahir = $_POST['tempat_lahir'];

	$tgl_lahir = $_POST['tgl_lahir'];

	$alamat = $_POST['alamat'];

	$nilai_BI = $_POST['nilai_BI'];

	$nilai_BING = $_POST['nilai_BING'];

	$nilai_MAT = $_POST['nilai_MAT'];

mysqli_query($mysqli, "INSERT into tbl_siswa set
			NISN='".$NISN."',
			nama_siswa='".$nama_siswa."',
			tempat_lahir='".$tempat_lahir."',
			tgl_lahir='".$tgl_lahir."',
			alamat='".$alamat."',
			nilai_BI='".$nilai_BI."',
			nilai_BING='".$nilai_BING."',
			nilai_MAT='".$nilai_MAT."',
			gaji_ortu='".$gaji_ortu."',
			prestasi='".$prestasi."'");

header("location:../dashboard.php?view=data_siswa");
		break;
	
	default:
		// code...
		break;
}

 ?>
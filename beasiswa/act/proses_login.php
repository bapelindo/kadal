<?php  
include '../koneksi.php';
$username = $_POST['username'];
$password = md5($_POST['password']);

$query=mysqli_query($mysqli, "SELECT * from tbl_user where username='".$username."' and password='".$password."'");
$hasil=mysqli_num_rows($query);
$row=mysqli_fetch_array($query);
if($hasil>0){
	session_start();
	$_SESSION['id_user'] = $row['id_user'];
	$_SESSION['username'] = $row['username'];
	$_SESSION['nama_lengkap'] = $row['nama_lengkap'];
	$_SESSION['level'] = $row['level'];
	header("location:../dashboard.php");
}
else {
	echo "Koneksi Gagal";
}
?>
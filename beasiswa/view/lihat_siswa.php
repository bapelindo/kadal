<?php 

include 'koneksi.php';
$query = mysqli_query($mysqli, "SELECT * from tbl_siswa");
 ?>

 <table border="1">
 	<tr>
 		<th>NISN</th>
		<th>Nama Siswa</th>
		<th>Tempat Lahir</th>
		<th>Tanggal Lahir</th>
		<th>Nilai Bahasa Indonesia</th>
		<th>Nilai Bahasa Inggris</th>
		<th>Nilai Matematika</th>
		<th>Status</th>
 	</tr>
 <?php 
while ($row=mysqli_fetch_array($query)) {
	$total= $row['nilai_BI']+$row['nilai_BING']+$row['nilai_MAT'];

	if ($total>=240) {
	    	$status = '<font style="color:green">LOLOS</font>';
	    } else {
	    	$status = '<font style="color:red">GAGAL</font>';
	    }

	echo '<tr>
 	<td>'.$row['NISN'].'</td>
 	<td>'.$row['nama_siswa'].'</td>
 	<td>'.$row['tempat_lahir'].'</td>
 	<td>'.$row['tgl_lahir'].'</td>
 	<td>'.$row['nilai_BI'].'</td>
 	<td>'.$row['nilai_BING'].'</td>
 	<td>'.$row['nilai_MAT'].'</td>
 	<td>'.$status.'</td>
 	
 </tr>';
}
  ?>
 	
 </table>

<!DOCTYPE html>
<html>
<head>
	<title>Tampilkan isi database</title>
</head>
<body>
			<?php include 'koneksidb.php';?>

<form action="tampil.php" method="POST">
<label>Cari :</label>
<input type="text" name="cari" placeholder="contoh bapel ...">
     
            <select name="advance">
            	<option value="no">Nomor</option>
                <option value="name">Nama</option>
                <option value="kota">Kota</option>
                <option value="provinsi">Provinsi</option>
                <option value="negara">Negara</option>
            </select>


<input type="submit" name="submit" value="Cari">
</form><br><br>

			<?php
			    if(isset($_POST["submit"])){
			     $search = $_POST['cari'];
			     $advance = $_POST['advance'];
			     // $hasil = mysqli_query($conn, "SELECT * FROM form WHERE name LIKE '%$search%'");

            switch ($advance) {
                case 'no':
                $hasil = mysqli_query($conn, "SELECT * FROM form WHERE no LIKE '%$search%'");
                break;
                case 'name':
                $hasil = mysqli_query($conn, "SELECT * FROM form WHERE name LIKE '%$search%'");
                break;
                case 'kota':
                $hasil = mysqli_query($conn, "SELECT * FROM form WHERE kota LIKE '%$search%'");
				break;
                case 'provinsi':
                $hasil = mysqli_query($conn, "SELECT * FROM form WHERE provinsi LIKE '%$search%'");
                case 'negara':
                $hasil = mysqli_query($conn, "SELECT * FROM form WHERE negara LIKE '%$search%'");                
                break; 
            }


			 }  else {
			     $hasil = mysqli_query($conn, "SELECT * FROM form");
			 }

			$idnambah=1;
			if (!$hasil){ die ('Mysql Error: '.mysqli_error($conn));}	?>

<table border="1" cellpadding="7" cellspacing="0">
	<thead>
			<tr>
				<th> ID </th>
				<th> No </th>
				<th> Nama </th>
				<th> Kota </th>
				<th> Provinsi </th>
				<th> Negara </th>
				<th> Edit </th>	
			</tr>
	</thead>
	<tbody>

			<?php
			while ($row = mysqli_fetch_array($hasil))
			{	
				echo '	<tr>
							<td>'.$idnambah.'</td>
							<td>'.$row['no'].'</td>
							<td>'.$row['name'].'</td>
							<td>'.$row['kota'].'</td>
							<td>'.$row['provinsi'].'</td>
							<td>'.$row['negara'].'</td>';
						
			    echo 	"<td><a href='formedit.php?id=".$row['id']."'>Edit</a> | ";
			    echo 	"<a href='formhapus.php?id=".$row['id']."'>Hapus</a></td></tr>";
			    
			    $idnambah++;
			}
			mysqli_free_result($hasil);
			mysqli_close($conn);
			?>

	</tbody>
		</table>
	<a href="index.php">Kembali<a/>
</body>	</html>
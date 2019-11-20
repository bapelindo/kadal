<?php 
include 'koneksidb.php';

$no=$_POST['no'];
$name=$_POST['name'];
$kota=$_POST['kota'];
$provinsi=$_POST['provinsi'];
$negara=$_POST['negara'];

echo "Nomor yang anda Masukkan: ".$no."<br>";
echo "Nama yang anda Masukkan: ".$name."<br>";
echo "Anda Berasal dari Kota: ".$kota."<br>";
echo "Anda Berasal dari Provinsi: ".$provinsi."<br>";
echo "Anda Berasal dari Negara: ".$negara."<br>";

$query= "insert into form (no, name, kota, provinsi, negara) values ('$no','$name','$kota','$provinsi','$negara')";
mysqli_query($conn, $query);

echo '<br> Klik '.'<a href="tampil.php">Disini<a/>'.' untuk melihat data yang anda masukkan';

echo '<br> Klik '.'<a href="index.php">Kembali<a/>'.' Jika ingin kembali memasukkan data';
//$data=mysqli_query($conn, $query);
//if(mysql_num_rows($conn, $query)){
//echo "<br>Data berhasil terkirim ke Database. ";}
//else{"<br>Data tidak berhasil terkirim ke Database. "};

?>

<?php
$svname="localhost";
$db="coba";
$user="bapel";
$pass="kadalkesit";

$conn=mysqli_connect($svname, $user, $pass, $db);
if (!$conn){
die("<br>Koneksi ke databases gagal. <br>" .mysqli_connect_error());
}
echo "<br>Koneksi ke databases berhasil. <br>";
echo date("l, d-M-Y")."<br><br>";

?>

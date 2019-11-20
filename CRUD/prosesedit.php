<?php

include("koneksidb.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $name = $_POST['name'];
    $kota = $_POST['kota'];
    $provinsi = $_POST['provinsi'];
    $negara = $_POST['negara'];
    $id = $_POST['id'];


    // buat query update
    $sql = "UPDATE form SET name='$name', kota='$kota', provinsi='$provinsi', negara='$negara' WHERE id=$id";
    $query = mysqli_query($conn, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: tampil.php');
    } 
    else{
        die("Gagal menyimpan perubahan...");}

}

?>

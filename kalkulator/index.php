<?php 
    include '/../admin/cek_login.php';
    session_start();
    if($_SESSION['status']!="login"){
        header("location:/../admin/index.php?pesan=belum_login");
    }
?>

    <html>
    <head>
        <title>Kalkulator Dengan PHP</title>
    </head>
    
    <body>
        <?php 
            if(isset($_POST['hitung'])){
                $b1    =$_POST['b1'];
                $b2    =$_POST['b2'];
                $operasi=$_POST['operasi'];
            
                switch ($operasi) {
                    case 'tambah':
                    $hasil = $b1+$b2;
                    break;
                    case 'kurang':
                    $hasil = $b1-$b2;
                    break;
                    case 'kali':
                    $hasil = $b1*$b2;
                    break;
                    case 'bagi':
                    $hasil = $b1/$b2;
                    break; 
                }
            }
        ?>
        <div >
            <h4>KALKULATOR SEDERHANA</h4>
            <form method="post" action="./"> 
                <input type="text" name="b1" placeholder="Bilangan 1" required/>
                <select name="operasi">
                    <option value="tambah"> Tambahkan ( + ) </option>
                    <option value="kurang"> Kurangkan ( - ) </option>
                    <option value="kali"> Kalikan ( X ) </option>
                    <option value="bagi"> Bagikan ( : ) </option>
                </select>
                <input type="text" name="b2" placeholder="Bilangan 2" required/>
                
<!-- 
            <input type="button" name="btambah" value="Tambah">
            
            <input type="button" name="bkurang" value="Kurang">

            <input type="button" name="/" value="Bagi">

            <input type="button" name="*" value="Kali">
 -->

            <?php if(isset($_POST['hitung'])){
            ?>
                = <input type="text" value="<?php echo $hasil; ?>" />
            <?php
            }
            else{
            ?>
                = <input type="text" value="0" />
            <?php
            }
            ?> 
<!-- 
<form method="post" action="./">
 -->
                
                <br><br><input type="submit" name="hitung" value="Hitung" /> 
                <a href="./" style="text-decoration:none;">
                <input type="button" value="Hapus" /></a> 
            </form>


    <p>Ingin Logout? klik <a href="/../admin/admin/logout.php">Logout</a></p>

    <p>Ingin bermain dengan CRUD PHP? klik <a href="/../CRUD/index.php">Disini</a></p>

           </div>
    </body>
    </html>

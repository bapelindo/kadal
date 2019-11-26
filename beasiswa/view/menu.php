<?php 
session_start();
if ($_SESSION['level']=='admin') {
	echo '
 <ul class="nav flex-column">
 	<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
		<span>Menu Utama</span>	
 	<a class="d-flex align-items-center text-muted" href="#">
 		<span data-feather="plus-circle"></span>
 	</a>
 </h6>
 <li class="nav-item">
 	<a class="nav-link active" href="dashboard.php?view=data_siswa">
 		<span data-feather="Home"></span>Edit Peserta<span class="sr-only">(current)</span>
 	</a>
 </li>
  <li class="nav-item">
 	<a class="nav-link active" href="dashboard.php?view=lihat_siswa">
 		<span data-feather="Home"></span>
 		Lihat Peserta<span class="sr-only">(current)</span>
 	</a>
 </li>
  <li class="nav-item">
 	<a class="nav-link active" href="dashboard.php?view=nowa_peserta">
 		<span data-feather="Home"></span>
 		No.WA Peserta<span class="sr-only">(current)</span>
 	</a>
 </li>
</ul>
';	
}
else {
	echo '
 <ul class="nav flex-column">
 	<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
		<span>Menu Utama</span>	
 	<a class="d-flex align-items-center text-muted" href="#">
 		<span data-feather="plus-circle"></span>
 	</a>
 </h6>
 <li class="nav-item">
 	<a class="nav-link active" href="dashboard.php">
 		<span data-feather="Home"></span>Lihat Peserta<span class="sr-only">(current)</span>
 	</a>
 </li>
  <li class="nav-item">
 	<a class="nav-link active" href="dashboard.php">
 		<span data-feather="Home"></span>
 		Lihat Nilai<span class="sr-only">(current)</span>
 	</a>
 </li>
  <li class="nav-item">
 	<a class="nav-link active" href="dashboard.php">
 		<span data-feather="Home"></span>
 		No.WA Peserta<span class="sr-only">(current)</span>
 	</a>
 </li>
</ul>';
}
 ?>
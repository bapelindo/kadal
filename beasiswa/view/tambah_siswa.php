<form action="act/simpan.php?act=tambah_siswa" method="post">
	<label>NISN</label>
	<input class="form-control" type="text" name="NISN">

	<label>Nama Lengkap</label>
	<input class="form-control" type="text" name="nama_siswa">

	<label>Tempat Lahir</label>
	<input class="form-control" type="text" name="tempat_lahir">

	<label>Tanggal Lahir</label>
	<input class="form-control" type="date" name="tgl_lahir">

	<label>Alamat</label>
	<input class="form-control" type="text" name="alamat">

	<label>Nilai Ujian Bahasa Indonesia</label>
	<input class="form-control" type="text" name="nilai_BI">

	<label>Nilai Ujian Bahasa Inggris</label>
	<input class="form-control" type="text" name="nilai_BING">

	<label>Nilai Ujian Matematika</label>
	<input class="form-control" type="text" name="nilai_MAT">

	<label>Gaji Orang Tua Perbulan</label>
	<select name="gaji_ortu" class="form-control">
		<option value="1">Kurang dari Rp. 500.000 </option>
		<option value="2">Rp. 500.001 - Rp. 1.000.000 </option>
		<option value="3">Lebih dari Rp. 1.000.001</option>
	</select>
<br>
	<label>Prestasi yang diraih Siswa</label> <br>
	<input type="radio" name="prestasi" value="1"> Pernah <br><br>	
	<input type="radio" name="prestasi" value="0"> Tidak Pernah <br><br>
	<button type="submit">Simpan</button>
</form>
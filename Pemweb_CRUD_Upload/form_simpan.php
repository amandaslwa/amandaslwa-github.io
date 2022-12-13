<html>
<head>
	<title>Latihan CRUD</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:#FDD4FF">
	<h1>Tambah Data Siswa</h1>

	<div class=formContainer>
		<form method="post" action="proses_simpan.php" enctype="multipart/form-data">
		<table cellpadding="8">
		<tr>
			<td>NIS</td>
			<td><input type="text" name="nis"  minlength="3" maxlength="50" size="100"></td> 
		</tr>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama"  minlength="3" maxlength="50" size="100"></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>
			<input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
			<input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
			</td>
		</tr>
		<tr>
			<td>Telepon</td>
			<td><input type="text" name="telp"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><textarea name="alamat"></textarea></td>
		</tr>
		<tr>
			<td>Foto</td>
			<td><input type="file" name="foto"></td>
		</tr>
		</table>
		</br>
		</br>

		<hr>
		<input type="submit" class="btn btn-primary" value="Simpan">
		</br>
		</br>
		<a href="index.php"><input type="button" class="btn btn-primary" value="Batal"></a>
		</form>
	</div>
</body>
</html>

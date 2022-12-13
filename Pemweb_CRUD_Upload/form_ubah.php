<html>
<head>
	<title>Latihan CRUD</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:#FDD4FF">
	<h1>Ubah Data Siswa</h1>
	
	<?php
	// Load file koneksi.php
	include "koneksi.php";
	
	// Ambil data NIS yang dikirim oleh index.php melalui URL
	$nis = $_GET['nis'];
	
	// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
	$query = "SELECT * FROM siswa WHERE nis='".$nis."'";
	$sql = mysqli_query($connect, $query);  // Eksekusi/Jalankan query dari variabel $query
	$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
	?>
	
	<div class=formContainer>
		<form method="post" action="proses_ubah.php?nis=<?php echo $nis; ?>" enctype="multipart/form-data">
		<table cellpadding="8">
		<tr>
			<td>Nama</td>
			<td><input type="text"   minlength="3" maxlength="50" size="100" name="nama" value="<?php echo $data['nama']; ?>"></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>
			<?php
			if($data['jenis_kelamin'] == "Laki-laki"){
				echo "<input type='radio' name='jenis_kelamin' value='laki-laki' checked='checked'> Laki-laki";
				echo "<input type='radio' name='jenis_kelamin' value='perempuan'> Perempuan";
			}else{
				echo "<input type='radio' name='jenis_kelamin' value='laki-laki'> Laki-laki";
				echo "<input type='radio' name='jenis_kelamin' value='perempuan' checked='checked'> Perempuan";
			}
			?>
			</td>
		</tr>
		<tr>
			<td>Telepon</td>
			<td><input type="text"   minlength="3" maxlength="50" size="100" name="telp" value="<?php echo $data['telp']; ?>"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><textarea name="alamat"><?php echo $data['alamat']; ?></textarea></td>
		</tr>
		<tr>
			<td>Foto</td>
			<td>
				<input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto<br>
				<br>
				<br>
				<input type="file" name="foto">
			</td>
		</tr>
		</table>
		
		<hr>
		<input type="submit" class="btn btn-primary" value="Ubah">
		<a href="index.php"><input type="button" class="btn btn-primary" value="Batal"></a>
		</form>
	</div>
</body>
</html>

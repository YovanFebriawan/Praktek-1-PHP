<!-- Mendefinisikan tipe dokumen berupa html -->
<html>
<head>
	<!-- Memberikan judul pada tab browser -->
	<title></title>
</head>
<body>
	<!-- Mendefinisikan form di html -->
	<form method="POST" action="prosesTugas3.php">
		<!-- Membuat judul di jendela browser -->
		<h1 align="center"> Form Biodata</h1>
		<!-- Mendefinisikan tabel di html -->
		<table width="390" align="center" cellpadding="2" cellspacing="2">
			<!-- Mendefinisikan baris dalam tabel -->
			<tr>
				<!-- Mendefinisikan sel data -->
				<td width="170">Nama Lengkap</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<!-- Mendefinisikan baris dalam tabel -->
			<tr>
				<!-- Mendefinisikan sel data -->
				<td width="170">Jenis Kelamin</td>
				<td>:</td>
				<td>
					<label><input type="radio" name="jenis_kelamin" value="Laki-Laki">Laki-Laki</label>
					<label><input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan</label>
				</td>
			</tr>
			<!-- Mendefinisikan baris dalam tabel -->
			<tr>
				<!-- Mendefinisikan sel data -->
				<td width="170">Email </td>
				<td>:</td>
				<td><input type="email" name="email"></td>
			</tr>
			<!-- Mendefinisikan baris dalam tabel -->
			<tr>
				<!-- Mendefinisikan sel data -->
				<td width="170">Tempat dan Tanggal Lahir</td>
				<td>:</td>
				<td><input type="text" name="ttl"></td>
			</tr>
			<!-- Mendefinisikan baris dalam tabel -->
			<tr>
				<!-- Mendefinisikan sel data -->
				<td width="170">Alamat</td>
				<td>:</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<!-- Mendefinisikan baris dalam tabel -->
			<tr>
				<!-- Mendefinisikan sel data -->
				<td width="170">Nomor Telepon/HP</td>
				<td>:</td>
				<td><input type="number" name="nomor"></td>
			</tr>
			<!-- Mendefinisikan baris dalam tabel -->
			<tr>
				<!-- Mendefinisikan sel data -->
				<td width="170">Kewarganegaraan</td>
				<td>:</td>
				<td><input type="te" name="negara"></td>
			</tr>
			<!-- Mendefinisikan baris dalam tabel -->
			<tr>
				<!-- Mendefinisikan sel data -->
				<td></td>
				<td></td>
				<td>  
					<!-- Membuat tombol -->
					<input type="submit" name="masuk" value="Simpan" onclick="return confirm('Apakah Anda yakin dengan data yang sudah dimasukkan?')">
					<input type="reset" name="reset" value="Hapus">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
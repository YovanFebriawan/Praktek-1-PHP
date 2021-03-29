<!-- Mendefinisikan tipe dokumen berupa html -->
<html>
<head>
	<!-- Memberikan judul pada tab browser -->
	<title></title>
</head>
<body>
	<!-- Mendefinisikan form di html -->
	<form method="POST" action="prosesTugas1.php">
		<!-- Mendefinisikan tabel di html -->
		<table width="500" align="center" cellpadding="2" cellspacing="2">
			<!-- Mendefinisikan baris dalam tabel -->
			<tr>
				<!-- Mendefinisikan sel data -->
				<td width="50">Nama : </td>
				<td><input type="text" name="nama"></td>
			</tr>
			<!-- Mendefinisikan baris dalam tabel -->
			<tr>
				<!-- Mendefinisikan sel data -->
				<td width="50">Email : </td>
				<td><input type="text" name="email"></td>
			</tr>
			<!-- Mendefinisikan baris dalam tabel -->
			<tr>
				<!-- Mendefinisikan sel data -->
				<td></td>
				<td>
					<!-- Membuat tombol -->
					<input type="submit" name="masuk" value="Login">
					<input type="reset" name="reset" value="Reset">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
<!-- Mendefinisikan tipe dokumen berupa html -->
<html>
<head>
	<!-- Memberikan judul pada tab browser -->
	<title></title>
</head>
<body>
	<!-- Mendefinisikan form di html -->
	<form method="POST" action="hasilkirim.php">
		<!-- Mendefinisikan tabel di html -->
		<table width="400" align="center" cellpadding="2" cellspacing="2">
			<!-- Mendefinisikan baris dalam tabel -->
			<tr>
				<!-- Mendefinisikan sel data -->
				<td width="130">Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<!-- Mendefinisikan baris dalam tabel -->
			<tr>
				<!-- Mendefinisikan sel data -->
				<td colspan="2" align="center">
					<!-- Membuat tombol -->
					<input type="submit" name="btnLogin" value="Kirim">
					<input type="reset" name="reset" value="Reset">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
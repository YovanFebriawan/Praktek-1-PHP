<!-- Mendefinisikan tipe dokumen berupa html -->
<html>
<head>
	<!-- Memberikan judul pada tab browser -->
	<title></title>
</head>
<body>
	<!-- Mendefinisikan form di html -->
	<form method="GET" action="getAct.php">
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
				<td width="130">Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<!-- Mendefinisikan baris dalam tabel -->
			<tr>
				<!-- Mendefinisikan sel data -->
				<td>
					<input type="submit" name="btnLogin" value="Login">
					<input type="reset" name="reset" value="Reset">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
<!-- Mendefinisikan tipe dokumen berupa html -->
<html>
<head>
	<!-- Memberikan judul pada tab browser -->
	<title>Tanggalan</title>
</head>
<body>
	<!-- Menambahkan skrip php-->
	<?php
		// Menampilkan tanggal dengan format (urutan bulan, nama bulan, 4 digit tahun, jam 'format 12 jam', menit, detik, am atau pm)
		echo date("m-F-Y, g:i:s a")
	?>
</body>
</html>
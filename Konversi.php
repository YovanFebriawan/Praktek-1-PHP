<!-- Mendefinisikan tipe dokumen berupa html -->
<html>
	<head>
		<!-- Memberikan judul pada tab browser -->
		<title>Konversi Tipe</title>
	</head>
	<body>
		<!-- Menambahkan skrip php-->
		<?php
			// Menyimpan nilai ke dalam variabel a
			$a = 300.4;
			echo $a;
			// Membuat baris baru
			echo "<br>";
			// Menampilkan teks dan konversi ke double
			echo "tipe Double : ",doubleval($a), "<br>";
			// Menampilkan teks dan konversi ke integer
			echo "tipe Integer : ", intval($a), "<br>";
			// Menampilkan teks dan konversi ke string
			echo "tipe String : ", strval($a);
		?>
	</body>
</html>
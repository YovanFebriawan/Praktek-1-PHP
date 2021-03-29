<!-- Mendefinisikan tipe dokumen berupa html -->
<html>
	<head>
		<!-- Memberikan judul pada tab browser -->
		<title>Pemrogaman PHP dengan Array</title>
	</head>
	<body>
		<!-- Menambahkan skrip php-->
		<?php
			// Mendefinisikan array
			$nama[] = "Agung Teguh";
			$nama[] = "Wibowo";
			$nama[] = "Almais";
			// Menampilkan teks berdasarkan urutan index
			echo $nama[1], $nama[2], $nama[0];
			// Membuat baris baru
			echo "<br>";
			// Menghitung jumlah elemen array dan disimpan di variabel jum_array
			$jum_array = count($nama);
			// Menampilkan teks jumlah elemen array = (nilai variabel jum_array)
			echo "jumlah elemen array = ", $jum_array;
		?>
	</body>
</html>
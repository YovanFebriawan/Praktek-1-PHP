<!-- Mendefinisikan tipe dokumen berupa html -->
<html>
	<head>
		<!-- Memberikan judul pada tab browser -->
		<title> Variabel </title>
	</head>
	<body>
		<!-- Menambahkan skrip php-->
		<?php
			// Memasukkan nilai 10 ke variabel nilai_1 
			$nilai_1 = 10;
			// Memasukkan nilai 3 ke variabel nilai_2
			$nilai_2 = 3;
			// Memasukkan hasil penjumlahan dan perkalian nilai_1 dan nilai_2 ke variabel nilai_3
			$nilai_3 = 2 * $nilai_1 + 8 * $nilai_2;
			// Menampilkan teks nilai yang berupa nilai dari variabel nilai_3
			echo "nilai = ", $nilai_3;
			// Membuat baris baru
			echo "<br>";
			// Memasukkan hasil penjumlahan nilai_1 dan nilai_2 ke variabel jumlah
			$jumlah = $nilai_1 + $nilai_2;
			// Menampilkan hasil penjumlahan nilai_1 dan nilai_2
			echo "hasil dari $nilai_1 + $nilai_2 adalah :  $jumlah";
			// Membuat baris baru
			echo "<br><br>";
			// Menampilkan teks "Nama : Yovan Febriawan Nurpratama"
			echo "\"Nama : Yovan Febriawan Nurpratama\" <br>";
			// Menampilkan teks NPM : 19082010037
			echo "NPM : 19082010037";
		?>
	</body>
</html>
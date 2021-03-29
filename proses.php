<!-- Menambahkan skrip php -->
<?php
	// Memasukkan file inc.php ke proses.php
	include "inc.php";
	// Menampilkan nilai dari variabel angka
	echo "$angka";
	// Membuat baris baru
	echo "<br>";
	// Membuat perualangan if dan elseif dengan suatu kondisi
	if ($angka==100) {
		// Menampilkan teks memuaskan
		echo "Memuaskan";
	} elseif ($angka<100&&$angka>=85) {
		// Menampilkan teks sangat baik
		echo "Sangat Baik";
	} elseif ($angka<85&&$angka>=70) {
		// Menampilkan teks baik
		echo "Baik";
	} elseif ($angka<70&&$angka>=55) {
		// Menampilkan teks cukup
		echo "Cukup";
	} elseif ($angka<55&&$angka>=0) {
		// Menampilkan teks kurang
		echo "Kurang";
	}
?>
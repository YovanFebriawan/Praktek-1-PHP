<!-- Menambahkan skrip php -->
<?php
	// Membuat perualangan if dan else dengan suatu kondisi
	if (isset ($variable_cookies)) {
		// Menampilkan teks
		echo 'Variable cookiesnya "$variable_cookies" nilainya adalah', $variable_cookies;
	}
	// Menjalankan kode ketika nilai tidak sesuai dengan kondisi
	else{
		// Menampilkan teks cookies belum diterapkan
		echo "Variable cookies belum diterapkan";
	}
?>
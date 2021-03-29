<!-- Menambahkan skrip php -->
<?php
	// Mendefinisikan cookie yang akan dikirim bersama dengan header http lainnya
	setcookie("variable_cookies","ini adalah variabel cookies",time()+60);
	// Menampilkan teks cek cookies dan diarahkan ke tautan file cekcookies.php
	echo "<a href=cekcookies.php>Cek Cookies</a>";
?>
<!-- Menambahkan skrip php -->
<?php
	// Membuat perulangan if dengan kondisi kolom nama kosong
	if (empty($_POST['nama'])) {
		header("Location:kosong.php");
	}
	// Dieksekusi ketika kondisi salah
	else{
		echo "<center>Nama :",$_POST['nama'],"</center><br>";
	}
?>
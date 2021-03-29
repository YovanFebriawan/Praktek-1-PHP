<!-- Menambahkan skrip php -->
<?php
	// Memasukkan file incTugas2.php ke prosesTugas1.php
	include "incTugas1.php";
	// Membuat perulangan if dengan pengecekan atribut nama
	if ($_POST['nama']==$nama&&$_POST['email']==$email) {
		// Menampilkan teks
		echo "<center>Nama : ",$_POST['nama'],"</center><br>";
		echo "<center>Email : ",$_POST['email'],"</center><br>";
		echo "<center>Login terakhir pada : ",$tanggal,"</center><br>";
	}
	// Dieksekusi ketika kondisi salah
	else{
		// Mengarahkan ke url notfound.php
		header("Location:notfound.php");
	}
?>
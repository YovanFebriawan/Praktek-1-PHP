<!-- Menambahkan skrip php -->
<?php
	// Membuat perulangan if dengan kondisi kolom nama kosong
	if (empty($_POST['nama'])){
		header("location:wow.php");
	}
	elseif (empty($_POST['jenis_kelamin'])){
		header("Location:wow.php");
	}
	elseif (empty($_POST['email'])){
		header("Location:wow.php");
	}
	elseif (empty($_POST['ttl'])){
		header("Location:wow.php");
	}
	elseif (empty($_POST['alamat'])){
		header("Location:wow.php");
	}
	elseif (empty($_POST['nomor'])){
		header("Location:wow.php");
	}
	elseif (empty($_POST['negara'])){
		header("Location:wow.php");
	}
	// Dieksekusi ketika kondisi salah
	else{
		// Membuat judul di jendela browser
		echo "<center><h1>Biodata</h1></center>";
		// Mengatur posisi elemen berada di tengah
		echo "<center>";
		// Mendefinisikan tabel di php
		echo "<table>";
		// Mendefinisikan baris dalam tabel
		echo "<tr>";
		// Mendefinisikan sel data
		echo "<td>Nama Lengkap</td><td>:</td><td>".$_POST['nama']."</td>";
		echo "</tr>";
		// Mendefinisikan baris dalam tabel
		echo "<tr>";
		// Mendefinisikan sel data
		echo "<td>Jenis Kelamin</td><td>:</td><td>".$_POST['jenis_kelamin']."</td>";
		echo "</tr>";
		// Mendefinisikan baris dalam tabel
		echo "<tr>";
		// Mendefinisikan sel data
		echo "<td>Email</td><td>:</td><td>".$_POST['email']."</td>";
		echo "</tr>";
		// Mendefinisikan baris dalam tabel
		echo "<tr>";
		// Mendefinisikan sel data
		echo "<td>Tempat dan Tanggal Lahir</td><td>:</td><td>".$_POST['ttl']."</td>";
		echo "</tr>";
		// Mendefinisikan baris dalam tabel
		echo "<tr>";
		// Mendefinisikan sel data
		echo "<td>Alamat</td><td>:</td><td>".$_POST['alamat']."</td>";
		echo "</tr>";
		// Mendefinisikan baris dalam tabel
		echo "<tr>";
		// Mendefinisikan sel data
		echo "<td>Nomor Telepon/HP</td><td>:</td><td>".$_POST['nomor']."</td>";
		echo "</tr>";
		// Mendefinisikan baris dalam tabel
		echo "<tr>";
		// Mendefinisikan sel data
		echo "<td>Kewarganegaraan</td><td>:</td><td>".$_POST['negara']."</td>";
		echo "</tr>";
		echo "</table>";
		echo "</center>";
	}

?>
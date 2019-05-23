<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body>
	<?php
	 session_start();

	 $nama=$_POST['nama'];
	 $nim=$_POST['nim'];
	 

	 if (empty($nama) && empty($nim)) {
	 	header("location:validasi.php?errornamanim= * Nama dan Nim Tidak Boleh Kosong");
	 }
	 elseif (empty($nama)) {
	 	header("location:validasi.php?errornama= * Nama Tidak Boleh Kosong");
	 }
	 elseif (empty($nim)) {
	 	header("location:validasi.php?errornim= * Nim Tidak Boleh Kosong");
	 }
	 else{

	 	echo "Selamat Datang ".$nama."<br> Nim Anda : ".$nim;
	 }

?>
</body>
</html>

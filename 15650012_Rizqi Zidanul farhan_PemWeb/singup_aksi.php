<?php
include 'koneksi.php';
		$nama_depan = $_POST['nama_depan'];
		$nama_belakang = $_POST['nama_belakang'];
		$asal = $_POST['asal'];
		$tgl_lahir = $_POST['tgl_lahir'];
		$bulan_lahir = $_POST['bulan_lahir'];
		$tahun_lahir = $_POST['tahun_lahir'];
		$kelamin = $_POST['kelamin'];
		$email = $_POST['email'];
		$hp = $_POST['hp'];
		$password = $_POST['password'];

mysql_query("INSERT INTO user VALUES('$nama_depan','$nama_belakang',
	'$asal','$tgl_lahir','$bulan_lahir','$tahun_lahir','$kelamin',
	'$email','$hp','$password')");

?>
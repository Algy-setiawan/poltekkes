<?php
	//memanggil file koneksi database
	include('conn.php');	
		
	//tangkap data dari form login
	$username = $_POST['username'];
	$password = $_POST['password'];

	//untuk mencegah sql injection
	//kita gunakan mysql_real_escape_string
	$username = mysql_real_escape_string($username);
	$password = MD5(mysql_real_escape_string($password));

	//cek data yang dikirim, apakah kosong atau tidak
	if (empty($username) && empty($password)) {
		//kalau username dan password kosong
		header('location:login.php?error=1');
		break;
	} else if (empty($username)) {
		//kalau username saja yang kosong
		header('location:login.php?error=2');
		break;
	} else if (empty($password)) {
		//kalau password saja yang kosong
		//redirect ke halaman index
		header('location:login.php?error=3');
		break;
	}
	
	//mencari data dengan username dan password yang sama di dalam tabel tbl_user
	$q = mysql_query("select * from admin where username='$username' and password='$password'");
	
	//mengecek apakah hasil pencarian data di atas ada
	if (mysql_num_rows($q) == 1) {
		session_start();
		//kalau username dan password sudah terdaftar di database
		//buat session dengan nama username dengan isi nama user yang login
		$_SESSION['username'] = $username;

		//redirect ke halaman index
		header('location:admin.php?page=home');
	} else {
		//kalau username ataupun password tidak terdaftar di database
		header('location:login.php?error=4');
	}
?>
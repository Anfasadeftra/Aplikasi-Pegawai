<!DOCTYPE html>
<html>
<head>
	<title>Login Pegawai PT Oriza</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="gaya.css">
	<link rel="shortcut icon" href="icon.png">
</head>
<body>

<div class="container">

	<h2>Login SI Data Kepegawaian</h2></br>
	<form method="post" action="ceklogin.php">
		<table>
			<tr>
				<td><input type="text" class="input" name="username" placeholder="Masukkan username"></td>
			</tr>
			<tr>
				<td><input type="password" class="input" name="password" placeholder="Masukkan password"></td>
			</tr>
		</table>	
		<input type="submit" class="masuk" value="MASUK"></td>		
	</form>
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal". "<br>"; 
			echo "username atau password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
</div>
</body>
</html>
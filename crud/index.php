<?php
include 'functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SI Data Kepegawaian</title>
	<link rel="shortcut icon" href="../icon.png">
	<style>
		body {
		background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('latar.jpg');
		background-size: cover;
		}
	</style>
</head>
<body>
<?=template_header('Home')?>
<div class="kotak">
	<h3>Data Pegawai PT Oriza Palu</h3>
	<p>Selamat datang di sistem informasi data kepegawaian PT Oriza Palu</p>
	<div>
		<a href="read.php"><button type="buttton"><span></span>Data Pegawai</button></a>
	</div>
</div>

<?=template_footer()?>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title>Koneksi Database MySQL</title>
</head>
<body>
	<h1>Demo Koneksi Database MySQL</h1>
	<?php  
	$con = mysqli_connect('localhost','root','');

	//Check Koneksi Database
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL Database :". mysqli_connect_error();
		exit();
	}

	?>
</body>
</html>
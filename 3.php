<!DOCTYPE html>
<html>
<head>
	<title>Mencoba membuat tabel mysql pada database mydb</title>
</head>
<body>
<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'mydb';

//Create Connection
$conn = mysqli_connect($servername,$username,$password,$database);
//Check Koneksi
if (!$conn) {
	die("Connection failed : ". mysqli_connect_error());
}

//Create Database
$sql = "CREATE TABLE liga 
		(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		kode VARCHAR(3) NOT NULL,
		negara VARCHAR(30) NOT NULL,
		champion int(3))";
if (mysqli_query($conn,$sql)) {
	echo "Tabel sukses dib";
}else {
	echo "Tabel gagal dibuat : ". mysqli_error($conn);
}
mysqli_close($conn);
?>
</body>
</html>

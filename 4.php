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
$sql = "INSERT INTO liga (kode, negara, champion) VALUES ('Jer','Jerman','4')
		,('Spa','Spanyol','3'),
		 ('Eng','English','3');";
if (mysqli_query($conn,$sql)) {
	echo "New record created successfully";
}else {
	echo "Error : " . $sql . "<br>". mysqli_error($conn);
}
mysqli_close($conn);
?>
</body>
</html>
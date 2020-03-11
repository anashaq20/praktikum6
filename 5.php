<!DOCTYPE html>
<html>
<head>
	<title>Mencoba tampilkan tabel liga</title>
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
$sql = "SELECT kode, negara, champion FROM liga;";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		echo "kode : ". $row['kode']. " Negara : ". $row['negara']. " Champion : " .$row['champion']. "<br>" ;
	}
}else {
	echo "0 results";
}
mysqli_close($conn);
  ?>
</body>
</html>
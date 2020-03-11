<?php
$servername = 'localhost';
$username = 'root';
$password = '';

//Create Connection
$conn = mysqli_connect($servername,$username,$password);
//Check Koneksi
if (!$conn) {
	die("Connection failed : ". mysqli_connect_error());
}

//Create Database
$sql = "create database myDB";
if (mysqli_query($conn,$sql)) {
	echo "Database sukses dibuat";
}else {
	echo "Database gagal dibuat : ". mysqli_error($conn);
}
mysqli_close($conn);
?>
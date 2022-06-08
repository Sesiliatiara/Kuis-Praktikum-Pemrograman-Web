<?php
$servername = "localhost"; 
$username = "root"; 
$password = "";
$dbname = "webalumni";

// Membuat Koneksi ke database
$conn = mysqli_connect($servername, $username, $password, $dbname); 

// Mengecek koneksi
if (!$conn) {
	die("Connection failed: ".mysqli_connect_error()); 
}
// Membuat tabel  alumni
$sql = "CREATE TABLE alumni (Id INT(5) AUTO_INCREMENT PRIMARY KEY, Name VARCHAR(50) NOT NULL, Address VARCHAR(50) NOT NULL, Email VARCHAR (50), Angkatan VARCHAR (50), Jurusan VARCHAR (25), Username VARCHAR(25), Password VARCHAR(25))";

if (mysqli_query($conn, $sql)) {
	echo "alumni created successfully"; 
} else {
	echo "Error creating alumni: ".mysqli_error($conn); 
}

mysqli_close($conn);
?>
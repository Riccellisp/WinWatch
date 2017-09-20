<?php
$servername = "localhost";
$username = "root";
$password = "Qpalzm#$123";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "CREATE DATABASE IF NOT EXISTS winWatch";
if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error creating database: " . $conn->error;
}
$sql1 = "USE winWatch";
mysqli_query($conn, $sql1);
// sql to create table
$sql = "CREATE TABLE IF NOT EXISTS contador(
	id INT AUTO_INCREMENT,
	PRIMARY KEY(id),
	ip VARCHAR(100)
	)";
if (mysqli_query($conn, $sql)) {
    echo "";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
?>

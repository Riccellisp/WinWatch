<?php
$servername = 'localhost';
$username = 'root';
$password = 'qpalzm';
//$conn = mysqli_connect($servername, $username, $password); 
$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
	die("Connection failed: " . $con->connect_error);
}else{
	echo "Conectou !!";
} 
//mysqli_select_db('downloads');
mysqli_select_db($conn,"downloads");
$nome = end(explode('/', $_SERVER['PHP_SELF']));
echo $nome;
$nome = explode('.', $nome);
echo $nome;
$nome = $nome[0];
echo $nome;
mysqli_query($conn,"CREATE TABLE IF NOT EXISTS $nome(
	id INT AUTO_INCREMENT,
	PRIMARY KEY(id),
	ip VARCHAR(100)
	)");
echo rolou;
mysqli_query("INSERT INTO downloads(ip)
	VALUES ($ip)");
	?>

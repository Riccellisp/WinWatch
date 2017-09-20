<?php
require('func.php');
if(isset($_POST['download'])) {
$ip = $_SERVER['REMOTE_ADDR'];
echo $ip;
echo $db;
$servername = 'localhost';
$username = 'root';
$password = 'qpalzm';
//$conn = mysqli_connect($servername, $username, $password); 
$conn = new mysqli($servername, $username, $password);
mysqli_select_db($conn,"downloads");

mysqli_query($conn,"
	INSERT INTO `contador`(`id`, `ip`) VALUES ('null',$ip)
	"); 
}
//$numero = mysqli_query("
//SELECT * FROM `{$nome}`
//");
//$contagem = (int)mysqli_num_rows($numero);	

?>
<html>
<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title> Número de cloiques</title>
</head>

<body>
<section>
<form action="" method="POST">
<input type="submit" name="download" id="download" value="clique"/>
</form>
</section>
</body>
</html>

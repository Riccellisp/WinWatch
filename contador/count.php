<?php
require('/var/www/html/func.php');
$sql = "SELECT * FROM contador";
$numero = mysqli_query($conn, $sql);
$contagem = mysqli_num_rows($numero);
echo "Número de downloads: $contagem";
?>

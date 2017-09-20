<?php
require('func.php');
echo "bom dia";
$ip = $_SERVER['REMOTE_ADDR'];
echo $ip;
$file = "http://lesc.ufc.br/winwatch/Acer.Watch-v1.5.53.1109-x86-Release.exe";
header("Content-Description: File Transfer");
header("Content-Type: application/octet-stream");
header("Content-Disposition: attachment; filename= " . basename($file) ." ");
readfile($file);
$sql = "INSERT INTO contador (id, ip)
VALUES (null, '$ip')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>

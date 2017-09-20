<?php
require('func.php');
if(isset($_POST['download'])) {
$ip = $_SERVER['REMOTE_ADDR'];
echo $ip;
$sql = "INSERT INTO coisa (id, ip)
VALUES (null, '$ip')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}
?>

<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "vegas5";

$conn = mysqli_connect($server, $user, $pass, $db);
mysqli_query($conn,"SET NAMES UTF8");
?>
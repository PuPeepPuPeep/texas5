<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "texas5";

$conn = mysqli_connect($server, $user, $pass, $db);
mysqli_query($conn,"SET NAMES UTF8");
?>
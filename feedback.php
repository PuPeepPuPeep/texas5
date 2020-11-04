<?php
session_start();
include("connect.php");

$message = $_POST['message'];
$insertsql = "INSERT INTO feedback(F_Text, M_ID) VALUE('".$message."', '".$_SESSION['M_ID']."')";
$excute = mysqli_query($conn, $insertsql);
?>
<script>
alert('ขอบคุณสำหรับคำติชม');
window.location.href = "index.php";
</script>
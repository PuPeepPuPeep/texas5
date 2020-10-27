<?php
session_start();
include('connect.php');
$P_ID = $_GET['P_ID'];
$M_ID = $_SESSION['M_ID'];
$sql = "INSERT INTO orders(P_ID,M_ID) VALUES('".$P_ID."','".$M_ID."')";
mysqli_query($conn, $sql);
?>
<script>
window.history.back();
</script>
<?php
session_start();
include('connect.php');

$sql = "SELECT * FROM orders WHERE M_ID ='".$_SESSION['M_ID']."'";
$result = mysqli_query($conn, $sql);
echo $_SESSION['M_ID'];
while($row = mysqli_fetch_assoc($result)){
    echo $row['O_ID'];
}
echo $_GET['sum'];
?>
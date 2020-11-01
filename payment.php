<?php
session_start();
include('connect.php');

$sum = $_GET['sum'];

$updatesql = "UPDATE orders SET O_status=1 WHERE M_ID ='".$_SESSION['M_ID']."' AND O_status=0";
$excute = mysqli_query($conn, $updatesql);
$insertsql = "INSERT INTO payment(Pay_price,M_ID) VALUES('".$sum."','".$_SESSION['M_ID']."')";
$result = mysqli_query($conn, $insertsql);
if($excute and $result){
    echo 'ชำระเงินสำเร็จ';
    header("Location:history.php");
}else{
    echo 'พัง';
}
?>
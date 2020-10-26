<?php
session_start();
include("connect.php");
$P_name = $_POST['P_name'];
$P_price = $_POST['P_price'];
$P_image = $_FILES['P_image']['name'];
$image = $_FILES['P_image']['tmp_name'];
$upto = "img/".$_FILES["P_image"]["name"];
$A_ID = $_SESSION['admin'];
$T_ID = $_POST['T_ID'];
move_uploaded_file($image, $upto);
$sql = "INSERT INTO product(P_name,P_price,P_img,A_ID,T_ID)
VALUES('".$P_name."','".$P_price."','".$P_image."','".$A_ID."','".$T_ID."')";
mysqli_query($conn, $sql);
header("Location: index.php");
?>
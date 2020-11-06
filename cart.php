<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Document</title>
</head>
<body>
<?php
session_start();
include("connect.php");

$sql = "SELECT * FROM orders WHERE M_ID='".$_SESSION['M_ID']."' AND O_status=0";
$result = mysqli_query($conn, $sql);
$sum = 0;

?>
<div class="w3-content w3-center">
    <h2 class="w3-wide">Cart</h2>
<?php
while($row = mysqli_fetch_assoc($result)){
    $sql2 = "SELECT * FROM product WHERE P_ID='".$row['P_ID']."'";
    $result2 = mysqli_query($conn, $sql2);
    $row2 = mysqli_fetch_assoc($result2);
    echo $row2['P_name'].'<br>' ;
    echo $row2['P_price'].'<br>' ;
    echo '<img src="'.$row2['P_img'].'" width="250" height="250"><br>';
    $sum = $sum + $row2['P_price'];
}
echo 'ราคารวม '.$sum.'<br>';

?>
<a class="w3-button w3-blue" href="payment.php?sum=<?php echo $sum ?>">ชำระเงิน</a>
<br>
<a class="w3-button w3-red" href="index.php">ซื้อเพิ่ม</a>
</div>
</body>
</html>
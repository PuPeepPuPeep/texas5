<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Cart</title>
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
    <table class="w3-table-all w3-centered">
    <tr>
        <th>ภาพสินค้า</th>
        <th>ชื่อสินค้า</th>
        <th>ราคา</th>
        <th></th>
    </tr>
<?php
while($row = mysqli_fetch_assoc($result)){
    $sql2 = "SELECT * FROM product WHERE P_ID='".$row['P_ID']."'";
    $result2 = mysqli_query($conn, $sql2);
    $row2 = mysqli_fetch_assoc($result2);
    echo '<tr><td><img src="img/'.$row2['P_img'].'" alt="'.$row2['P_img'].'" width="250" height="250"></td>';
    echo '<td>'.$row2['P_name'].'</td>' ;
    echo '<td>'.$row2['P_price'].'</td>';
    echo '<td><a href="deletecart.php?O_ID='.$row['O_ID'].'" type="button" class="w3-btn w3-round-large w3-red">ยกเลิก</a></td></tr>' ;
    $sum = $sum + $row2['P_price'];
}
?>
    </table>
<?php 
echo 'ราคารวม '.number_format($sum).'<br>';

?>
<a class="w3-btn w3-round-large w3-green" href="payment.php?sum=<?php echo $sum ?>">ชำระเงิน</a>

<a class="w3-btn w3-round-large w3-red" href="index.php">ซื้อเพิ่ม</a>
</div>
</body>
</html>



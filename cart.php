<?php
session_start();
include("connect.php");

$sql = "SELECT * FROM orders WHERE M_ID='".$_SESSION['M_ID']."'";
$result = mysqli_query($conn, $sql);
$sum = 0;
while($row = mysqli_fetch_assoc($result)){
    $sql2 = "SELECT * FROM product WHERE P_ID='".$row['P_ID']."'";
    $result2 = mysqli_query($conn, $sql2);
    $row2 = mysqli_fetch_assoc($result2);
    echo $row2['P_name'].'<br>' ;
    echo $row2['P_price'].'<br>' ;
    echo '<img src="'.$row2['P_img'].'"><br>';
    $sum = $sum + $row2['P_price'];
}
echo $sum;
?>
<a href="payment.php?sum=<?php echo $sum ?>">ภาษีกู</a>
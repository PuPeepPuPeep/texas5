<?php
    include("connect.php");
    $O_ID=$_GET["O_ID"];
    $sql="DELETE FROM orders WHERE O_ID=".$O_ID;
    $result=mysqli_query($conn,$sql);
    header("Location: cart.php");
?>
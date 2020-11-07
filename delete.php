<?php
    include("connect.php");
    $P_ID=$_GET["P_ID"];
    $sql="DELETE FROM product WHERE P_ID=".$P_ID;
    $result=mysqli_query($conn,$sql);
    header("Location: index.php");
?>
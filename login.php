<?php
session_start();

include("connect.php");
$sql = "SELECT * FROM member WHERE M_Username='".$_POST['user']."'AND M_Password='".$_POST['pass']."'";

$result=mysqli_query($conn,$sql);
$numrow=mysqli_num_rows($result);
$row=mysqli_fetch_assoc($result);
if($numrow==0){
    echo '<script>
        alert("เข้าสู่ระบบไม่ได้");
        window.location.href = "index.php";
    </script>';
}else{
    header("Location:index.php");
}
$_SESSION['name']=$row['M_Name'];
$_SESSION['M_ID']=$row['M_ID'];
?>
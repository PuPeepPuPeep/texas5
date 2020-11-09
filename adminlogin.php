<?php
session_start();

include("connect.php");
$sql = "SELECT * FROM admin WHERE A_ID='".$_POST['user']."'AND A_Password='".$_POST['pass']."'";

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
$_SESSION['admin']=$row['A_ID'];
?>
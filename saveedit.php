<?php
include("connect.php");
$name = $_POST['name'];
$price = $_POST['price'];
$image = $_POST['image'];
$type = $_POST['type'];
$P_ID = $_GET['P_ID'];

if(empty($image)){
    $updatesql = "UPDATE product SET P_name='".$name."', P_price='".$price."', T_ID='".$type."'
WHERE P_ID='".$P_ID."'";
}else{
$updatesql = "UPDATE product SET P_name='".$name."', P_price='".$price."', P_img='".$image."', T_ID='".$type."'
WHERE P_ID='".$P_ID."'";
}
$excute = mysqli_query($conn, $updatesql);
if($excute){
    echo '<script>
        alert("กล้ามาก เก่งมาก ขอบใจ");
        window.location.href = "index.php";
    </script>';
}else{
    echo '<script>
        alert("พัง");
        window.location.back();
    </script>';
}
?>
<?php
include('connect.php');
session_start();

$insertsql = "INSERT INTO history(M_ID,O_ID) SELECT M_ID, O_ID FROM orders WHERE O_status=1 AND O_ID NOT IN (
    SELECT O_ID FROM history)";
$excute = mysqli_query($conn, $insertsql);
if($excute){
    echo '<script>
        alert("ชำระเงินสำเร็จ");
        window.location.href = "index.php";
    </script>';
}else{
    echo 'รวยเถอะ'.mysqli_error($conn);
}
?>
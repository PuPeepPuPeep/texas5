<?php
include("connect.php");

$username = $_POST["user"];
$password = $_POST["pass"];
$name = $_POST["name"];
$address = $_POST["address"];

$checkuser = "SELECT * FROM member WHERE M_Username = '$username'";
$result = mysqli_query($conn,$checkuser);
$user = mysqli_fetch_assoc($result);
    if ($user) {
        echo "Username ซ้ำ";
    }else{
        $sql = "INSERT INTO member(M_Username,M_Password,M_Name,M_Address) VALUES('".$username."','".$password."','".$name."','".$address."')";
        mysqli_query($conn,$sql);
        header("Location: index.php");
    }
?>
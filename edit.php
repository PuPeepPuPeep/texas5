<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <title>Edit</title>
</head>
<body>
<?php
include("connect.php");
if(isset($_GET["P_ID"])){
$P_ID = mysqli_real_escape_string($conn, $_GET['P_ID']);
$sql = "SELECT * FROM product WHERE P_ID = '$P_ID' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
}
?>
<div id="edit" class="w3-center">
  <div class="w3-modal-content w3-animate-zoom" style="padding:32px">
    <div class="w3-container w3-white w3-center">
      <form action="saveedit.php?P_ID=<?php echo $P_ID; ?>" method="post">
        <h2 class="w3-wide">Edit</h2>
        <p>Name</p>
        <p><input name="name" class="w3-input w3-border" type="text" value="<?php echo $row["P_name"];?>" required></p>
        <p>Price</p>
        <p><input name="price" class="w3-input w3-border" type="text" value="<?php echo $row["P_price"];?>" required></p>
        <p>Image</p>
        <p><input name="image" class="w3-input w3-border" type="file" value="<?php echo $row["P_img"];?>"></p>
        <p>Type</p>
        <p><input name="type" class="w3-input w3-border" type="text" value="<?php echo $row["T_ID"];?>" required></p>
        <button type="button" class="w3-btn w3-round-large w3-red" onclick="window.history.back();">ยกเลิก</button>
        <button type="submit" class="w3-btn w3-round-large w3-green">ตกลง</button>
      </form>
    </div>
  </div>
</div>
</body>
</html>



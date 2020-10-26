<?php
include("connect.php");
if(isset($_GET["P_ID"])){
$P_ID = mysqli_real_escape_string($conn, $_GET['P_ID']);
$sql = "SELECT * FROM product WHERE P_ID = '$P_ID' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
}
?>
<div id="edit" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom" style="padding:32px">
    <div class="w3-container w3-white w3-center">
      <form action="saveedit.php?P_ID=<?php echo $P_ID; ?>" method="post">
        <h2 class="w3-wide">Edit</h2>
        <p>Name</p>
        <p><input name="name" class="w3-input w3-border" type="text" value="<?php echo $row["P_name"];?>"></p>
        <p>Price</p>
        <p><input name="price" class="w3-input w3-border" type="text" value="<?php echo $row["P_price"];?>"></p>
        <p>Image</p>
        <p><input name="image" class="w3-input w3-border" type="text" value="<?php echo $row["P_img"];?>"></p>
        <p>Type</p>
        <p><input name="type" class="w3-input w3-border" type="text" value="<?php echo $row["T_ID"];?>"></p>
        <button type="button" class="btn btn-danger" onclick="window.history.back();">ยกเลิก</button>
        <button type="submit" class="btn btn-success">ตกลง</button>
        <!--<i onclick="document.getElementById('newsletter').style.display='none'" class="fa fa-remove w3-right w3-button w3-transparent w3-xxlarge"></i>-->                     <!-- ตัวกากะบาท -->
      </form>
    </div>
  </div>
</div>
<div class="w3-container w3-text-grey" id="jeans">
    <p>8 items</p>
    
  </div>

  <!-- Product grid มันเรียงเป็นแนวตั้ง-->
  <h1>1</h1>
  <div class="w3-row">
  <?php
    include("connect.php");
    $sql = "SELECT * FROM product";
    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($result)){
    echo '
      <div class="w3-col l3 s6">
        <div class="w3-container">
        <div class="w3-display-container">
          <img src="img/'.$row["P_img"].'" style="width:100%">
          <span class="w3-tag w3-display-topleft">New</span>
          <div class="w3-display-middle w3-display-hover">
            <button class="w3-button w3-red">Buy now <i class="fa fa-shopping-cart"></i></button>
          </div>';
          if(isset($_SESSION['admin'])){
            ?>
            <div class="w3-display-bottom w3-display-hover">
            
            <a href="#?P_ID=<?php echo $row["P_ID"];?>" onclick=edit();  type="button" class="w3-button w3-yellow">Edit<i class="fa fa-shopping-cart"></i></a>
            
            </div>
            <?php
          }
        echo '</div>
          <p>'.$row["P_name"].'<br><b>'.$row["P_price"].'</b></p>
        </div>
      </div>';
    }
  ?>
</div>


<?php
include("connect.php");
if(isset($_GET["P_ID"])){
$P_ID = mysqli_real_escape_string($conn, $_GET['P_ID']);
$sql = "SELECT * FROM product WHERE P_ID = '$P_ID' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
}
?>

<?php
$P_ID = 'Heee';
echo '<script>';
echo "var P_Name = '$P_ID';";
echo '</script>';
//include("edit.php");
?>

<script>
function edit() {
  document.getElementById('edit').style.display='block';
  document.getElementById('P_Name').value=P_Name;
}
</script>

<div id="edit" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom" style="padding:32px">
    <div class="w3-container w3-white w3-center">
      <form action="register.php" method="post">
        <h2 class="w3-wide">Edit</h2>
        <p>Name</p>
        <p><input name="name" id="P_Name" class="w3-input w3-border" type="text"></p>
        <p>Price</p>
        <p><input name="price" class="w3-input w3-border" type="text" value="<?php echo $row["P_price"];?>"></p>
        <p>Image</p>
        <p><input name="image" class="w3-input w3-border" type="text" placeholder="Image"></p>
        <p>Type</p>
        <p><input name="type" class="w3-input w3-border" type="text" placeholder="Type"></p>
        <button type="button" class="btn btn-danger" onclick="document.getElementById('edit').style.display='none'">ยกเลิก</button>
        <button type="submit" class="btn btn-success">ตกลง</button>
        <!--<i onclick="document.getElementById('newsletter').style.display='none'" class="fa fa-remove w3-right w3-button w3-transparent w3-xxlarge"></i>-->                     <!-- ตัวกากะบาท -->
      </form>
    </div>
  </div>
</div>
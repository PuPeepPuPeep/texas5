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
            echo '<div class="w3-display-bottom w3-display-hover">
            <button href="javascript:void(0)" type="button" class="w3-button w3-red">Edit<i class="fa fa-shopping-cart"></i></button>
            </div>';
          }
        echo '</div>
          <p>'.$row["P_name"].'<br><b>'.$row["P_price"].'</b></p>
        </div>
      </div>';
    }
  ?>
</div>
<div id="edit" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom" style="padding:32px">
    <div class="w3-container w3-white w3-center">
      <form action="register.php" method="post">
        <h2 class="w3-wide">Edit</h2>
        <p>USERNAME</p>
        <p><input name="user" class="w3-input w3-border" type="text" placeholder="Username"></p>
        <p>PASSWORD</p>
        <p><input name="pass" class="w3-input w3-border" type="password" placeholder="Password"></p>
        <p>NAME</p>
        <p><input name="name" class="w3-input w3-border" type="text" placeholder="Name"></p>
        <p>ADDRESS</p>
        <p><textarea name="address" rows="4" cols="50" class="w3-input w3-border" placeholder="Address" ></textarea></p>
        <button type="button" class="btn btn-danger" onclick="document.getElementById('newsletter').style.display='none'">ยกเลิก</button>
        <button type="submit" class="btn btn-success">ตกลง</button>
        <!--<i onclick="document.getElementById('newsletter').style.display='none'" class="fa fa-remove w3-right w3-button w3-transparent w3-xxlarge"></i>-->                     <!-- ตัวกากะบาท -->
      </form>
    </div>
  </div>
</div>
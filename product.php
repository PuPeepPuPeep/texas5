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
          </div>
        </div>
          <p>'.$row["P_name"].'<br><b>'.$row["P_price"].'</b></p>
        </div>
      </div>';
    }
  ?>
</div>
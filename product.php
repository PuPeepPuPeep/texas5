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
      ?>
      <div class="w3-col l3 s6">
        <div class="w3-container">
        <div class="w3-display-container">
          <img src="img/<?= $row["P_img"]; ?>" width="380" height="300">
          <span class="w3-tag w3-display-topleft">New</span>
          <div class="w3-display-middle w3-display-hover">
          
            <?php 
              if(empty($_SESSION['name']) && empty($_SESSION['id'])) {
                ?>
                <a href="" onClick="alert('กรุณาเข้าสู่ระบบ')" class="w3-button w3-red">Buy now <i class="fa fa-shopping-cart"></i></a>
    
                <?php
              } else {
                echo '<a href="buy.php?P_ID='.$row["P_ID"].'" class="w3-button w3-red">Buy now <i class="fa fa-shopping-cart"></i></a>';
              }
            ?>

          </div>
      <?php
      // ไม่ใช้ echo ในกรณีที่จะมีเงื่อนไข
    // echo '
    //   <div class="w3-col l3 s6">
    //     <div class="w3-container">
    //     <div class="w3-display-container">
    //       <img src="img/'.$row["P_img"].'" style="width:100%">
    //       <span class="w3-tag w3-display-topleft">New</span>
    //       <div class="w3-display-middle w3-display-hover">
    //         <a href="buy.php?P_ID='.$row["P_ID"].'" class="w3-button w3-red" disabled>Buy now <i class="fa fa-shopping-cart"></i></a>
    //       </div>';
          if(isset($_SESSION['admin'])){
            ?>
            <div class="w3-display-bottom w3-display-hover">
            
            <a href="edit.php?P_ID=<?php echo $row["P_ID"];?>" type="button" class="w3-button w3-yellow">Edit<i class="fa fa-shopping-cart"></i></a>
            
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
<script>
  
</script>
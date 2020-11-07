  <!-- Product grid มันเรียงเป็นแนวตั้ง-->
  <div class="w3-row" style="margin-top: 12px;" id="product">

  <?php
    include("connect.php");
    $sql = "SELECT * FROM product";
    if (isset($_GET['T'])){
      $sql = "SELECT * FROM product WHERE T_ID='".$_GET['T']."'";
    }elseif (isset($_POST['search'])){
      $sql = "SELECT * FROM product WHERE P_Name LIKE '%" . $_POST['search'] . "%'";
      session_start();
    }
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
      ?>
      <div class="w3-col l3 s6">
        <div class="w3-container">
        <div class="w3-display-container">
          <img src="img/<?= $row["P_img"]; ?>" width="250" height="250">
          <span class="w3-tag w3-display-topleft">New</span>
          <div class="w3-display-middle w3-display-hover">
          
            <?php 
              if(empty($_SESSION['name']) && empty($_SESSION['id'])) {
                ?>
                <a href="" onClick="alert('กรุณาเข้าสู่ระบบ')" class="w3-btn w3-round-large w3-red">Buy now <i class="fa fa-shopping-cart"></i></a>
    
                <?php
              } else {
                echo '<a href="buy.php?P_ID='.$row["P_ID"].'" class="w3-btn w3-round-large w3-red">Buy now <i class="fa fa-shopping-cart"></i></a>';
              }
            ?>

          </div>
      <?php
          if(isset($_SESSION['admin'])){
            ?>
            <div class="w3-display-bottommiddle w3-display-hover">
            
            <a href="edit.php?P_ID=<?php echo $row["P_ID"];?>" type="button" class="w3-btn w3-round-large w3-yellow">Edit <i class="fa fa-wrench"></i></a>
            <a href="delete.php?P_ID=<?php echo $row["P_ID"];?>" type="button" class="w3-btn w3-round-large w3-red">Delete <i class="fa fa-remove"></i></a>

            </div>
            <?php
          }
        echo '</div>
          <p title="'.$row["P_name"].'">'.mb_strimwidth($row["P_name"], 0, 30, "...").'<br><b style="color:#03B6C1">'.number_format($row["P_price"]).'</b></p>
        </div>
      </div>';
    }
  ?>
</div>
<script>
  
</script>
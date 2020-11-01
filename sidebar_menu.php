<?php
  session_start()
?>
<?php
if (isset($_GET['logout'])){
  session_destroy();
  header('Location:index.php');
}
?>
<nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">
  <div class="w3-container w3-display-container w3-padding-16">
    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
    <h3 class="w3-wide"><b>LOGO</b></h3>
  </div>


  <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
    <?php 
      if(!empty($_SESSION['name']) || !empty($_SESSION['M_ID']) || !empty($_SESSION['admin'])) {
        
    ?>
    
    <a href="index.php?logout='1'" class="w3-bar-item w3-button w3-pading">Logout</a>
    
    <?php 
      } else {
    ?>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding" onclick="document.getElementById('login').style.display='block'">Login</a> <!-- login -->
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding" onclick="document.getElementById('newsletter').style.display='block'">Register</a> <!-- register -->
    <?php


    }
    ?>
    <a href="#" class="w3-bar-item w3-button">Shirts</a>
    <a href="#" class="w3-bar-item w3-button">CPU</a>
    <a href="#" class="w3-bar-item w3-button">Mainboard</a>
    <a href="#" class="w3-bar-item w3-button">RAM</a>
    <a href="#" class="w3-bar-item w3-button">HardDisk / SSD</a>
    <a href="#" class="w3-bar-item w3-button">Power Supply</a>
  </div>
  <a href="#footer" class="w3-bar-item w3-button w3-padding">Contact</a> 
</nav>



<!-- Top menu on small screens -->
<header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
  <div class="w3-bar-item w3-padding-24 w3-wide">LOGO</div>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-24 w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></a>
</header>



<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>



<!-- !PAGE CONTENT! -->
<!--<div class="w3-main" style="margin-left:250px">-->



  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:83px"></div>
  


  <!-- Top header -->
  <header class="w3-container w3-xlarge">
    <p class="w3-left">test</p>
    <p class="w3-right">


      <?php if(!empty($_SESSION['name']) || !empty($_SESSION['M_ID'])) { ?>

      <a href="cart.php" class="fa fa-shopping-cart w3-margin-right"></a>
      <?php 
      } 
        
       ?>
      <!-- show Name -->
      <?php
        if (isset($_SESSION['name'])){
          echo $_SESSION['name'];
        }
        // if (isset($_SESSION['admin'])){
        //   echo '<i class="fa fa-coffee"';
        //   ?>
           <?php
        //   echo '></i>';
        //   echo $_SESSION['admin'];
        // }
        if(isset($_SESSION['admin'])) {

      ?>
      

      <div class="w3-dropdown-hover" style="float: right; margin-bottom: 5px;">
        <button class="w3-button w3-black"><i class="fa fa-coffee"><?= $_SESSION['admin']; ?></i></button>
          <div class="w3-dropdown-content w3-bar-block w3-border">
          <a href="#" class="w3-bar-item w3-button" onclick="document.getElementById('addproduct').style.display='block'" style="font-size: 16px;">Add Product</a>
          <a href="#" class="w3-bar-item w3-button" style="font-size: 16px;">Report</a>
        </div>
      </div>

      <?php  
      
        }
      
      ?>

      
    </p>
  </header>



  <!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>



<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:250px">



<!-- Push down content on small screens -->
<div class="w3-hide-large" style="margin-top:83px"></div>



<!-- regster ไปแก้เอา   -->
<div id="newsletter" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom" style="padding:32px">
    <div class="w3-container w3-white w3-center">
      <form action="register.php" method="post">
        <h2 class="w3-wide">REGISTER</h2>
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
<!-- Login -->
<div id="login" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom" style="padding:32px">
    <div class="w3-container w3-white w3-center">
      <form action="login.php" method="post">
        <h2 class="w3-wide">LOGIN</h2>
        <p>USERNAME</p>
        <p><input name="user" class="w3-input w3-border" type="text" placeholder="Username"></p>
        <p>PASSWORD</p>
        <p><input name="pass" class="w3-input w3-border" type="password" placeholder="Password"></p>
        <button type="button" class="btn btn-danger" onclick="document.getElementById('login').style.display='none'">ยกเลิก</button>
        <button type="submit" class="btn btn-success">ตกลง</button>
        <button type="button" class="btn btn-info" onclick="document.getElementById('adminlogin').style.display='block'">สำหรับ Admin</button>
        <!--<i onclick="document.getElementById('newsletter').style.display='none'" class="fa fa-remove w3-right w3-button w3-transparent w3-xxlarge"></i>-->                     <!-- ตัวกากะบาท -->
      </form>
    </div>
  </div>
</div>
<!-- Admin Login -->
<div id="adminlogin" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom" style="padding:32px">
    <div class="w3-container w3-white w3-center">
      <form action="adminlogin.php" method="post">
        <h2 class="w3-wide">ADMIN LOGIN</h2>
        <p>USERNAME</p>
        <p><input name="user" class="w3-input w3-border" type="text" placeholder="Username"></p>
        <p>PASSWORD</p>
        <p><input name="pass" class="w3-input w3-border" type="password" placeholder="Password"></p>
        <button type="button" class="btn btn-danger" onclick="document.getElementById('adminlogin').style.display='none'">ยกเลิก</button>
        <button type="submit" class="btn btn-success">ตกลง</button>
        <!--<i onclick="document.getElementById('newsletter').style.display='none'" class="fa fa-remove w3-right w3-button w3-transparent w3-xxlarge"></i>-->                     <!-- ตัวกากะบาท -->
      </form>
    </div>
  </div>
</div>
<!--Add Product-->
<div id="addproduct" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom" style="padding:32px">
    <div class="w3-container w3-white w3-center">
      <form action="addproduct.php" method="post" enctype="multipart/form-data">
        <h2 class="w3-wide">Add Product</h2>
        <p>Name</p>
        <p><input name="P_name" class="w3-input w3-border" type="text" placeholder="Product Name"></p>
        <p>Price</p>
        <p><input name="P_price" class="w3-input w3-border" type="text" placeholder="Product Price"></p>
        <p>Image</p>
        <p><input name="P_image" class="w3-input w3-border" type="file" placeholder="Product Image"></p>
        <p>Type</p>
        <p><input name="T_ID" class="w3-input w3-border" type="text" placeholder="Product Type"></p>
        <button type="button" class="btn btn-danger" onclick="document.getElementById('addproduct').style.display='none'">ยกเลิก</button>
        <button type="submit" class="btn btn-success">ตกลง</button>
        <!--<i onclick="document.getElementById('newsletter').style.display='none'" class="fa fa-remove w3-right w3-button w3-transparent w3-xxlarge"></i>-->                     <!-- ตัวกากะบาท -->
      </form>
    </div>
  </div>
</div>
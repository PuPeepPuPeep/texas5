<?php
session_start()
?>
<nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">
  <div class="w3-container w3-display-container w3-padding-16">
    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
    <h3 class="w3-wide"><b>LOGO</b></h3>
  </div>



  <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding" onclick="document.getElementById('login').style.display='block'">Login</a> <!-- login -->
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding" onclick="document.getElementById('newsletter').style.display='block'">Register</a> <!-- register -->
    <a href="#" class="w3-bar-item w3-button">Shirts</a>
    <a href="#" class="w3-bar-item w3-button">Dresses</a>
    <a onclick="myAccFunc()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn">
      Jeans <i class="fa fa-caret-down"></i>
    </a>
    <div id="demoAcc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
      <a href="#" class="w3-bar-item w3-button w3-light-grey"><i class="fa fa-caret-right w3-margin-right"></i>Skinny</a>
      <a href="#" class="w3-bar-item w3-button">Relaxed</a>
      <a href="#" class="w3-bar-item w3-button">Bootcut</a>
      <a href="#" class="w3-bar-item w3-button">Straight</a>
    </div>
    <a href="#" class="w3-bar-item w3-button">Jackets</a>
    <a href="#" class="w3-bar-item w3-button">Gymwear</a>
    <a href="#" class="w3-bar-item w3-button">Blazers</a>
    <a href="#" class="w3-bar-item w3-button">Shoes</a>
  </div>
  <a href="#footer" class="w3-bar-item w3-button w3-padding">Contact</a> 
  <a href="#footer"  class="w3-bar-item w3-button w3-padding">Subscribe</a>
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
      <i class="fa fa-shopping-cart w3-margin-right"></i>
      <i class="fa fa-search"></i>

     <!-- <?php
        echo $_SESSION['name'];
      ?>
      -->
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
        <!--<i onclick="document.getElementById('newsletter').style.display='none'" class="fa fa-remove w3-right w3-button w3-transparent w3-xxlarge"></i>-->                     <!-- ตัวกากะบาท -->
      </form>
    </div>
  </div>
</div>
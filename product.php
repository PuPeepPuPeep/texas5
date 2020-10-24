<div class="w3-container w3-text-grey" id="jeans">
    <p>8 items</p>
    
  </div>

  <!--<div>    
    <div class="form-group w3-col 13 s6">
      <label for="usr">Name:</label>
      <input type="text" class="form-control" id="usr">
    </div>
    <div class="form-group w3-col 13 s6">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd">
    </div>
  </div> -->
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

    
    <!-- ลงมา 2 บันทัด -->
    <h1>2</h1>
    <div class="w3-row">
    <div class="w3-col l3 s6">
      <div class="w3-container">
        <img src="PBEW.jpg" style="width:100%">
        <p>Ripped Skinny Jeans<br><b>$24.99</b></p>
      </div>
      <div class="w3-container">
        <img src="PBEW.jpg" style="width:100%">
        <p>Mega Ripped Jeans<br><b>$19.99</b></p>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <div class="w3-display-container">
          <img src="PBEW.jpg" style="width:100%">
          <span class="w3-tag w3-display-topleft">New</span>
          <div class="w3-display-middle w3-display-hover">
            <button class="w3-button w3-red">Buy now <i class="fa fa-shopping-cart"></i></button>
          </div>
        </div>
        <p>Mega Ripped Jeans<br><b>$19.99</b></p>
      </div>
    
      <div class="w3-container">
        <div class="w3-display-container">
          <img src="PBEW.jpg" style="width:100%">
          <span class="w3-tag w3-display-topleft">New</span>
          <div class="w3-display-middle w3-display-hover">
            <button class="w3-button w3-red">Buy now <i class="fa fa-shopping-cart"></i></button>
          </div>
        </div>
        <p>Mega Ripped Jeans<br><b>$19.99</b></p>
      </div>
    </div>

    <div class="w3-col l3 s6">
    <div class="w3-container">
        <div class="w3-display-container">
          <img src="PBEW.jpg" style="width:100%">
          <span class="w3-tag w3-display-topleft">Sale</span>
          <div class="w3-display-middle w3-display-hover">
            <button class="w3-button w3-red">Buy now <i class="fa fa-shopping-cart"></i></button>
          </div>
        </div>
        <p>Vintage Skinny Jeans<br><b class="w3-text-red">$14.99</b></p>
      </div>
      <div class="w3-container">
        <div class="w3-display-container">
          <img src="PBEW.jpg" style="width:100%">
          <span class="w3-tag w3-display-topleft">Sale</span>
          <div class="w3-display-middle w3-display-hover">
            <button class="w3-button w3-red">Buy now <i class="fa fa-shopping-cart"></i></button>
          </div>
        </div>
        <p>Vintage Skinny Jeans<br><b class="w3-text-red">$14.99</b></p>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <img src="PBEW.jpg" style="width:100%">
        <p>Vintage Skinny Jeans<br><b>$14.99</b></p>
      </div>
      <div class="w3-container">
        <img src="PBEW.jpg" style="width:100%">
        <p>Ripped Skinny Jeans<br><b>$24.99</b></p>
      </div>
    </div>


<h1>3</h1>
    <div class="w3-row">
    <div class="w3-col l3 s6">
      <div class="w3-container">
        <img src="PBEW.jpg" style="width:100%">
        <p>Ripped Skinny Jeans<br><b>$24.99</b></p>
      </div>
      <div class="w3-container">
        <img src="PBEW.jpg" style="width:100%">
        <p>Mega Ripped Jeans<br><b>$19.99</b></p>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <div class="w3-display-container">
          <img src="PBEW.jpg" style="width:100%">
          <span class="w3-tag w3-display-topleft">New</span>
          <div class="w3-display-middle w3-display-hover">
            <button class="w3-button w3-red">Buy now <i class="fa fa-shopping-cart"></i></button>
          </div>
        </div>
        <p>Mega Ripped Jeans<br><b>$19.99</b></p>
      </div>
    
      <div class="w3-container">
        <div class="w3-display-container">
          <img src="PBEW.jpg" style="width:100%">
          <span class="w3-tag w3-display-topleft">New</span>
          <div class="w3-display-middle w3-display-hover">
            <button class="w3-button w3-red">Buy now <i class="fa fa-shopping-cart"></i></button>
          </div>
        </div>
        <p>Mega Ripped Jeans<br><b>$19.99</b></p>
      </div>
    </div>

    <div class="w3-col l3 s6">
    <div class="w3-container">
        <div class="w3-display-container">
          <img src="PBEW.jpg" style="width:100%">
          <span class="w3-tag w3-display-topleft">Sale</span>
          <div class="w3-display-middle w3-display-hover">
            <button class="w3-button w3-red">Buy now <i class="fa fa-shopping-cart"></i></button>
          </div>
        </div>
        <p>Vintage Skinny Jeans<br><b class="w3-text-red">$14.99</b></p>
      </div>
      <div class="w3-container">
        <div class="w3-display-container">
          <img src="PBEW.jpg" style="width:100%">
          <span class="w3-tag w3-display-topleft">Sale</span>
          <div class="w3-display-middle w3-display-hover">
            <button class="w3-button w3-red">Buy now <i class="fa fa-shopping-cart"></i></button>
          </div>
        </div>
        <p>Vintage Skinny Jeans<br><b class="w3-text-red">$14.99</b></p>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <img src="PBEW.jpg" style="width:100%">
        <p>Vintage Skinny Jeans<br><b>$14.99</b></p>
      </div>
      <div class="w3-container">
        <img src="PBEW.jpg" style="width:100%">
        <p>Ripped Skinny Jeans<br><b>$24.99</b></p>
      </div>
    </div>
  </div>
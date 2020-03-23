<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>SKP STORE</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-4.1.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
    <link href="css/btn.css" rel="stylesheet">
    <link href="css/font.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kanit|Mitr|Prompt|Sriracha" rel="stylesheet">

  </head>
     <body>
     <header >
      <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #A9A9A9">
        <a class="navbar-brand" href="menu_user.php">SKP STORE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
              <a class="nav-link" href="product.php"><span class="font2">หมวดหมู่สินค้า</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="cart/cart.php"><span class="font2">ตะกร้าสินค้า</span><span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="order_list\order_head_list.php"><span class="font2">รายการสั่งซื้อ</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link " href="Authentication\edit_user.php"><span class="font2">แก้ไข้ข้อมูลส่วนตัว</span></a>
            </li>
          </ul>
            <button type="button" class="btn" style="background-color:#6495ED; color: #ffffff">  <?php echo $_SESSION["Username"]; ?></button>
            <a href="Authentication\logout.php"><button type="button" class="btn" style="background-color: #6495ED; color: #ffffff" >ออกจากระบบ</button></a>
         
        </div>
      </nav>
    </header>
    <div id="products" class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <br><br><h1 style="font-size: 40px; font-weight: 600;">รายละเอียดสินค้า</h1><br><br>
                </div>
            </div>
        </div>
    </div>
    
    <?php

    include ("connect.inc");

    $Product_ID = $_GET['Product_ID'];
    $sql = "SELECT * FROM product WHERE Product_ID=$Product_ID";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    ?>
    <center>
    <img class="img-dproduct" src = "pic_product/<?=$row["Product_pic"]?>" width="300" height="300">
    <br>
    <h4>ชื่อสินค้า <?=$row["Product_name"]?></h4>
    <br>
    <h6>รายละเอียดสินค้า <?=$row["Product_detail"]?></h6>
    <br>
    <h6>จำนวนที่มี <?=$row["Product_stock"]?></h6>
    <br>
    <h6>ราคา <?=$row["Product_price"]?></h6>
    <a href='cart.php?Product_ID=<?=$row['Product_ID']?>&act=add'>เพิ่มสินค้าลงตะกร้า</a>
    <br>
    <a href="./proD_1.php"> กลับไปหน้ารายการสินค้า</a>
    </center>
     </body>
</html>


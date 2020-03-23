<?php include "connect.php" ?>
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
          <a class="nav-link" href="cart.php"><span class="font2">ตะกร้าสินค้า</span><span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="order_list\order_head_list.php"><span class="font2">รายการสั่งซื้อ</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link " href="Authentication\edit_user.php"><span class="font2">แก้ไขข้อมูลส่วนตัว</span></a>
        </li>
      </ul>
      <form class="form-inline mt-2 mt-md-0">

        <button type="button" class="btn" style="background-color:#6495ED; color: #ffffff">  <?php  echo $_SESSION["Username"]; ?></button>
        <a href="Authentication\logout.php"><button type="button" class="btn" style="background-color:#6495ED; color: #ffffff" >ออกจากระบบ</button></a>
     
    </div>
  </nav>
</header>
    <div id="products" class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <br><br><h1>หมวดหมู่สินค้าทั้งหมด</h1><br><br>
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->
            <div class="row">
            
            
                <div class="col-md-6 col-sm-6">
                    <div class="product-item">
                        <div class="item-thumb">
                            <span class="note"></span>
                            <div class="overlay">
                                <div class="overlay-inner">
                                    <h4><a href="proD_1.php" style="color: #808080">วัสดุก่อสร้าง</h4>
                                </div>
                            </div> <!-- /.overlay -->
                            <img class="img-product" src="photo/prod1.jpg">
                        </div> <!-- /.item-thumb -->
                    </div> <!-- /.product-item -->
                </div> <!-- /.col-md-3 -->
                
            
                <div class="col-md-6 col-sm-6">
                    <div class="product-item">
                        <div class="item-thumb">
                            <span class="note"></span>
                            <div class="overlay">
                                <div class="overlay-inner">
                                <h4><a href="proD_2.php" style="color: #808080">หลังคา</h4>
                                </div>
                            </div> <!-- /.overlay -->
                            <img class="img-product" src="photo/prod2.jpg">
                        </div> <!-- /.item-thumb -->
                    </div> <!-- /.product-item -->
                </div> <!-- /.col-md-3 -->
            </div> <!-- /.row -->
            
            <div class="row">
            <div class="col-md-6 col-sm-6">
                    <div class="product-item">
                        <div class="item-thumb">
                            <span class="note"></span>
                            <div class="overlay">
                                <div class="overlay-inner">
                                <h4><a href="proD_3.php" style="color: #808080">สีทาบ้าน</h4>
                                </div>
                            </div> <!-- /.overlay -->
                            <img class="img-product" src="photo/prod3.png">
                        </div> <!-- /.item-thumb -->
                    </div> <!-- /.product-item -->
                </div> <!-- /.col-md-3 -->
                
                
                <div class="col-md-6 col-sm-6">
                    <div class="product-item">
                        <div class="item-thumb">
                            <span class="note"></span>
                            <div class="overlay">
                                <div class="overlay-inner">
                                <h4><a href="proD_4.php" style="color: #808080">กระเบื้องปูพื้น</h4>
                                </div>
                            </div> <!-- /.overlay -->
                            <img class="img-product" src="photo/prod4.jpg">
                        </div> <!-- /.item-thumb -->
                    </div> <!-- /.product-item -->
                </div> <!-- /.col-md-3 -->
            </div> <!-- /.row -->

            <div class="row">
            <div class="col-md-6 col-sm-6">
                    <div class="product-item">
                        <div class="item-thumb">
                            <span class="note"></span>
                            <div class="overlay">
                                <div class="overlay-inner">
                                <h4><a href="proD_5.php" style="color: #808080">ประตูหน้าต่าง</h4>
                                </div>
                            </div> <!-- /.overlay -->
                            <img class="img-product" src="photo/prod5.jpg">
                        </div> <!-- /.item-thumb -->
                    </div> <!-- /.product-item -->
                </div> <!-- /.col-md-3 -->
                
                
                <div class="col-md-6 col-sm-6">
                    <div class="product-item">
                        <div class="item-thumb">
                            <span class="note"></span>
                            <div class="overlay">
                                <div class="overlay-inner">
                                <h4><a href="proD_6.php" style="color: #808080">อุปกรณ์ตกแต่งบ้าน</h4>
                                </div>
                            </div> <!-- /.overlay -->
                            <img class="img-product" src="photo/prod6.jpg">
                        </div> <!-- /.item-thumb -->
                    </div> <!-- /.product-item -->
                </div> <!-- /.col-md-3 -->
            </div> <!-- /.row -->

           

	<script src="js/vendor/jquery-1.10.1.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
    <script src="js/jquery.easing-1.3.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
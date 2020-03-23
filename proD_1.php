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
              <a class="nav-link" href="show_order.php"><span class="font2">รายการสั่งซื้อ</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link " href="Authentication\edit_user.php"><span class="font2">แก้ไข้ข้อมูลส่วนตัว</span></a>
            </li>
          </ul>
            <button type="button" class="btn" style="background-color:#6495ED; color: #ffffff"  >  <?php  echo $_SESSION["Username"]; ?></button>
            <a href="Authentication\logout.php"><button type="button" class="btn" style="background-color:#6495ED; color: #ffffff" >ออกจากระบบ</button></a>
         
        </div>
      </nav>
    </header>

    <div id="products" class="content-section">
        <div class="container" >
            <div class="row">
                <div class="col-md-12 text-center">
                <br><br><h1 class="title-product">วัสุดก่อสร้าง</h1><br><br>
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->
            <table>
	<th>
		<tr></tr>
		<tr></tr>
		<tr></tr>
	</th>
<div class="row">
    <?php
  //connect db
  include("connect.inc");
  if(empty($_GET)){
    $sql = "select * from product order by Product_ID";  //เรียกข้อมูลมาแสดงทั้งหมด
    $result = mysqli_query($conn, $sql);
  }
  while($row = mysqli_fetch_array($result)){
    //$a=$a+1;
?>

<div class="col-md-4">
<div class="card form-signin font2" style="width: 20rem;margin: 20px;" >
  <img class="img-gproduct"  style="border-radius:20px;padding: 15px;" src="pic_product/<?=$row["Product_pic"] ?>" >
  <div class="card-body" style="text-align: center;">
    <h5 class="card-title"><?=$row["Product_name"]?></h5>
    <h5 class="card-title">ราคา : <?=$row["Product_price"]?> บาท </h5>
    <a href='Product_Detail.php?Product_ID=<?=$row['Product_ID']?>&act=add'>ดูรายละเอียดสินค้า</a>
  </div>
</div>
</div>
<?php
  }
?>
            
        </div> <!-- /.container -->
    </div> <!-- /#products -->
    </div>
    </body>
</html>
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
  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #A9A9A9">
      <a class="navbar-brand" href="menu_user.php">SKP STORE</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
              <a class="nav-link" href="list_pay.php"><span class="font2">รายการชำระเงิน</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="add_product.php"><span class="font2">เพิ่มรายการสินค้า</span><span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="add_number.php"><span class="font2">เพิ่มจำนวนสินค้า</span></a>
            </li>
          </ul>
          <form class="form-inline mt-2 mt-md-0">
        <button type="button" class="btn" style="background-color:#6495ED; color: #ffffff"> <?php echo $_SESSION["Username"]; ?></button>
        <a href="Authentication\logout.php"><button type="button" class="btn" style="background-color:#6495ED; color: #ffffff">ออกจากระบบ</button></a>

      </div>
    </nav>
  </header>
  <div id="products" class="content-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <br><br>
          <h1 class="title-product">เพิ่มรายการสินค้า</h1><br><br>
        </div> <!-- /.col-md-12 -->
      </div> <!-- /.row -->
      <div>

      <form action="confirm_addpro.php" method="post" enctype="multipart/form-data">
                            <div class="row" >
                            	<div class="col-md-2 col-sm-2">
                                  <h6>ชื่อสินค้า : </h6>
                              </div>
                              <div>
                              <input name="Product_name" type="text" size="100">
                              </div>
                            </div>
                            <br>

                            <div class="row">
                            	<div class="col-md-2 col-sm-2">
                               <h6>รายละเอียด : </h6>
                              </div>
                              <div>
                              <input name="Product_detail" type="text" size="100">
                              </div>
                            </div>
                            <br>

                            <div class="row">
                            	<div class="col-md-2 col-sm-2">
                                <h6>หมวดหมู่ : </h6>
                              </div>
                              <div>
                                    <select id="ProType_ID">
                                        <option value="1">วัสุดก่อสร้าง</option>
                                        <option value="2">หลังคา</option>
                                        <option value="3">สีทาบ้าน</option>
                                        <option value="4">วัสดุปูพื้นและผนัง</option>
                                        <option value="5">ประตูและหน้าต่าง</option>
                                        <option value="6">วัสดุซ่อมแซ่มบ้าน</option>
                                    </select><br><br>
                                </div>
                              </div>
                            </div>
                            <br>

                            <div class="row">
                            	<div class="col-md-2 col-sm-2">
                                <h6>จำนวน : </h6>
                              </div>
                              <div>
                              <input name="Product_amount" type="text" size="30">
                              </div>
                            </div>
                            <br>

                            <div class="row">
                            	<div class="col-md-2 col-sm-2">
                                <h6>ราคา : </h6>
                              </div>
                              <div>
                              <input name="Product_price" type="text" size="30">
                              </div>
                            </div>
                            <br>

                            <div class="row">
                            	<div class="col-md-2 col-sm-2">
                                <h6>รูปภาพ: </h6>
                              </div>
                              <div>
                              <input name="Product_pic" type="file" required><br><br>
                              </div>
                            </div>
                            <br>

                            <div class="text-center">
                                <button type="submit">เพิ่มสินค้า</button>
                            </div>
                        </form>
        
</body>
</html>
 

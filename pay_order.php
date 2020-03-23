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
          <h1 class="title-product">วิธีชำระเงิน</h1><br><br>
        </div> <!-- /.col-md-12 -->
      </div> <!-- /.row -->
      <div>
        <div>

          <?php

          $Order_ID = $_GET["Order_ID"];
          $Username = $_SESSION["Username"];
         //$Product_ID = $_GET["Product_ID"];
          $sql = "SELECT * FROM `order`,`user`,`product` WHERE Order_ID=$Order_ID AND Username='$Username' AND order.Product_ID = product.Product_ID";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_fetch_array($result);
          
          //echo $row["Product_name"] 
          ?>

          <br>
          <div class="row">
            <div class="col-md-12 text-center" style="color: #000000">
              <table class="h6 table " border="1">
                <tr>
                 <td><h6> รหัสใบสั่งซื้อ </h6></td>
                  <td><?= $Order_ID; ?></td>
                </tr>
                <tr>
                  <td><h6> ชื่อผู้สั่งซื้อ </h6></td>
                  <td><?= $Username; ?></td>
                </tr>
                <tr>
                  <td><h6> ราคาสุทธิ์ </h6></td>
                  <td><?= $row["Order_totalprice"]; ?> บาท </td>
                </tr>
                <tr>
              </table>
              <br>



              <h4 style="color: #696969;">ช่องทางการชำระเงิน</h4> <br>
                  <h>ชื่อบัญชี : บริษัท เอสเคพี สโตร์ </h> <br>
                  <h>ธนาคาร : กสิกรไทย </h> <br>
                  <h>หมายเลขบัญชี : 00011122233 </h>
              <br><br><br>



              <h4 style="color: #696969;">กรุณากรอกข้อมูลบัญชีผู้โอนเงิน</h4> <br>
                          <form action="comfirm_pay.php" method="post" enctype="multipart/form-data">
                            <div class="row" >
                            	<div class="col-md-2 col-sm-2">
                                  <h6>ชื่อบัญชีผู้โอน : </h6>
                              </div>
                              <div>
                              <input name="Bill_acname" type="text" size="100">
                              </div>
                            </div>
                            <br>

                            <div class="row">
                            	<div class="col-md-2 col-sm-2">
                               <h6>จำนวนเงินที่โอน : </h6>
                              </div>
                              <div>
                              <input name="Bill_amount" type="text" size="100">
                              </div>
                            </div>
                            <br>

                            <div class="row">
                            	<div class="col-md-2 col-sm-2">
                                <h6>วันที : </h6>
                              </div>
                              <div>
                              <input name="Bill_date" type="date" size="100">
                              </div>
                            </div>
                            <br>

                            <div class="row">
                            	<div class="col-md-2 col-sm-2">
                                <h6>เวลา : </h6>
                              </div>
                              <div>
                              <input name="Bill_time" type="time" size="100">
                              </div>
                            </div>
                            <br>

                            <div class="text-center">
 					                      <center>
 					                      <input type="file" class="btn btn-default" name="Bill_photo">
                                <input type="hidden" value="<?=$order['Order_ID'];?>" name="Order_ID">
                              </center>
    				                    **** กรุณาอัพโหลดรูปใบเสร็จเป็นไฟล์ .jpeg เท่านั้น ****<br><br>
                                <input type="submit" value="ยืนยันการชำระเงิน" class="btn btn-default">
                                <br><br><br>
                            </div>
					                </form>
                  

              
                <!--tr>
                  <td> ชื่อสินค้า </td>
                  <td> ราคา </td>
                  <td> จำนวนที่สั่ง </td>
                  <td> ราคารวม </td>
                </tr>
                <tr>
                  <td> ชื่อสินค้า </td>
                  <td> ราคา </td>
                  <td> จำนวนที่สั่ง </td>
                  <td> ราคารวม </td>
                </tr-->
              
              </table>
            </div>
          </div>
</body>
<?php
// }
?>

</html>
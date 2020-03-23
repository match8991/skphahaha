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

</body>
</html>
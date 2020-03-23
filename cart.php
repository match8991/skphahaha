<?php include "connect.php" ?>
<?php
session_start();

error_reporting( error_reporting() & ~E_NOTICE );

if(!empty($_SESSION["Username"])){		// ถ้า เป็นสมาชิก


	$Product_ID = $_REQUEST['Product_ID'];
  $act = $_REQUEST['act'];
  $count2 = $_REQUEST['count'];




	if($act=='add' && !empty($Product_ID))
	{
		if(isset($_SESSION['cart'][$Product_ID]))
		{
			$_SESSION['cart'][$Product_ID]++;
		}
		else
		{
			$_SESSION['cart'][$Product_ID]=1;
		}
	}




	if($act=='remove' && !empty($Product_ID))  //ยกเลิกการสั่งซื้อ
	{
		unset($_SESSION['cart'][$Product_ID]);
	}



	if($act=='update')
	{
    $count_x = $_POST['count'];
    for ($x = 1; $x <= $count_x; $x++) {
      $Product_ID_x  = $_POST['Product_ID'][$x];
      $_SESSION['cart'][$Product_ID_x] = $_POST['amount'][$x];
    }
	}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>ตะกร้าสินค้า</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-4.1.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
    <link href="css/btn.css" rel="stylesheet">
    <link href="css/font.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kanit|Mitr|Prompt|Sriracha" rel="stylesheet">

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
          <a class="nav-link " href="Authentication\edit_user.php"><span class="font2">แก้ไขข้อมูลส่วนตัว</span></a>
        </li>
      </ul>

        <button type="button" class="btn" style="background-color: #6495ED; color: #ffffff"  >  <?php  echo $_SESSION["Username"]; ?></button>
        <a href="Authentication\logout.php"><button type="button" class="btn" style="background-color: #6495ED; color: #ffffff" >ออกจากระบบ</button></a>
    </div>
  </nav>
  <div id="products" class="content-section">
        <div class="container" >
            <div class="row">
                <div class="col-md-12 text-center">
                <br><br><h1 class="title-product">ตะกร้าสินค้า</h1><br><br>
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->
</header>
  </head>
  <body class="Athiti">
<div class="container ">
	<div>

<form id="frmcart" name="frmcart" action="add_order.php" method="post">
  <table class="table table-striped custab jumbotron font2 " style="background-color: white">
    <tr>
      <td align="center">รูปสินค้า</td>
      <td align="center">ชื่อสินค้า</td>
      <td align="center">ราคา</td>
      <td align="center">จำนวน</td>
      <td align="center">ราคารวม</td>
      <td align="center">ลบ</td>
      <td></td>
    </tr>

    <?php
$total=0;
$count=0;
if(!empty($_SESSION['cart']))
{
	include("connect.inc");
	foreach($_SESSION['cart'] as $Product_ID=>$qty)
	{
		$sql = "select * from product where Product_ID=$Product_ID";
		$query = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($query);
		$sum = $row['Product_price'] * $qty;
    $total += $sum;
    $count ++;

    echo "<tr>";
    echo "<td><img src='pic_product/" . $row["Product_pic"]  . "'width='$pixW' height='100'></td>";
		echo "<td align='center'>" . $row["Product_name"] . "</td>";
		echo "<td width='46' align='right'>" .number_format($row["Product_price"]) . "</td>";
    echo "<td width='57' align='right'>";
  
    echo "<input type='text' name='amount[$count]' value='$qty' size='2'></td>"; //จำนวนสินค้า
    


		echo "<td width='93' align='right'>".number_format($sum)."</td>";
		//remove product
    echo "<td width='46' align='center'><a class='btn btn-danger' href='cart.php?Product_ID=$Product_ID&act=remove'>ลบ</a></td>";
    echo "<td width='57' align='right'>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<input type='hidden' name='sum[$count]' value='".number_format($sum)."'></td>"; //ราคารวมแต่ละชิ้น
    echo "<input type='hidden' name='Product_ID[$count]' value=".$row['Product_ID']."></td>"; //ID สินค้า
    echo "</tr>";
	} 

  echo "<tr>";
    echo "<td colspan='3' align='right' bgcolor='#CEE7FF'><b>รวมสินค้าทั้งหมด</b></td>";
    echo "<td colspan='2' align='right' bgcolor='#CEE7FF'>"."<b>".number_format($total)."</b>"."</td>";
    echo "<td width='57' align='right' bgcolor='#CEE7FF'><b>บาท</b></td>";
    echo "<td align='center' bgcolor='#CEE7FF'></td>";
  echo "</tr>";

 

}

echo "<input type='hidden' name='count' value=".$count."></td>"; //ID สินค้า

?>


<tr >
  <td colspan='6' align='right'>
  <!-- <a class='btn' onclick='this.form.action="cart.php?act=update"'>คำนวนสินค้าใหม่</a></td> -->
  <!-- <input type="submit" onclick='this.form.action="cart.php?act=update"' id="button" value="คำนวนสินค้าใหม่" ></td> -->
  <input type="submit" formaction="?act=update" method="post" id="button" value="คำนวนสินค้าใหม่" ></td>
  <td width='57' align='right'>
</tr>



<tr>
  <td colspan="2" align="left"><a href="product.php" class='btn btn-success btn-xs'><span class="glyphicon glyphicon-edit"></span>กลับหน้ารายการสินค้า</a></td>
  <td colspan="5" align="right"><input type="submit" name="Submit2" value="ยืนยันการสั่งซื้อ" class='btn btn-info btn-xs'  />
</form>
</td>
</tr>
</tr>


<?php
	}			//ปิด ถ้า user มี
else {
	echo "<script type='text/javascript'>alert('กรุณาเข้าสู่ระบบก่อนเลือกสินค้า');
	window.location='../Authentication/login.html';
	</script>";
}
?>


</body>
</html>
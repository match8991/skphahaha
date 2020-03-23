<?php include "connect.php";
session_start();

// $stmt = $pdo->prepare("SELECT * FROM user WHERE Username = ? ");
// $stmt->bindParam(1, $_POST["Username"]);
// $stmt->execute();
// $row = $stmt->fetch();


// $hash = $row["Password"];

$amount = $_POST['Order_amount'];
$sum = $_POST['Order_totalprice'];

$addor = "SELECT * FROM order WHERE Order_amount = '$amount' , Order_amount = '$sum'";

$result = mysqli_query($conn,$addor);

                  $_POST["amount"] = $row["Order_amount"];
                  $_POST["sum"] = $row["Order_totalprice"];
?>
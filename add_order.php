<?php
$server = "localhost";
$user   = "root";
$password = "";
$db_name  = "skp_store";
// Create connection
$conn   = new mysqli($server,$user,$password,$db_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
session_start();
$count = $_POST['count'];
$User_ID = $_SESSION["User_ID"];
$check=0;

for ($x = 1; $x <= $count; $x++) {
    // echo "The number is: $x <br>";
    $sql = "INSERT INTO `order` (Order_amount, Order_totalprice, Product_ID, User_ID) 
    VALUES ('".$_POST['amount'][$x]."','".$_POST['sum'][$x]."','".$_POST['Product_ID'][$x]."','".$User_ID."')";

    if ($conn->query($sql) === TRUE) {
        
    } else {
        $check++;
        
    }

}

if ($check === 0) {
        header("location: show_order.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
$conn->close();
?>

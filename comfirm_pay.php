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

if ($_FILES ["Bill_photo"] ["error"] > 0) {
    echo "Return Code: " . $_FILES ["Bill_photo"] ["error"] . "<br>";

}else{

    if(move_uploaded_file($_FILES["Bill_photo"]["tmp_name"], "/Bill_photo" . $_POST["Order_ID"])){
        echo "Upload Compete". "<br>";
    }
    else {
        echo "Uploade Uncomplete". "<br>";
 
    }
}


	$Bill_acname = $_POST["Bill_acname"];
	$Bill_amount = $_POST["Bill_amount"];
	$Bill_date = $_POST["Bill_date"];
    $Bill_time = $_POST["Bill_time"];
    
	$pdo->exec("INSERT INTO bill (Bill_acname,Bill_date,Bill_amount,Bill_time) VALUES ('".$Bill_acname."','".$Bill_date."','".$Bill_amount."','".$Bill_time."')");
	$result = $pdo->query("SELECT * FROM bill");									
    $row = $result->fetch();

    
    
?>

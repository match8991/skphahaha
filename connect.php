<?php

error_reporting( error_reporting() & ~E_NOTICE );
try {
	$pdo = new PDO("mysql:host=localhost;dbname=skp_store;charset=utf8", "root", "");
} catch (PDOException $e) {
	echo "เกิดข้อผิดพลาด : ".$e->getMessage();
}

$server = "localhost";
$user   = "root";
$password = "";
$db_name  = "skp_store";
$conn   = new mysqli($server,$user,$password,$db_name);

if($conn->connect_errno){
	printf("ไม่สามารถเชื่อต่อฐานข้อมูลได้" ,$conn->connect_error );
	exit();
}

mysqli_set_charset($conn, 'utf8');

?>




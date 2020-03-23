<?php include "../connect.php" ?>
<html>
<head>

</head>
<body>
    <?php
        if(isset($_POST)){
            $Username = $_POST['Username'];
            $Password = $_POST['Password'];
            $User_fname = $_POST['User_fname'];
            $User_lname= $_POST['User_lname'];
            $User_add = $_POST['User_add'];
            $User_email = $_POST['User_email'];
            $User_tel = $_POST['User_tel'];

            // header("Content-type:text/javascript;charset=utf-8");
            // define('HOST','localhost');
            // define('USER','root');
            // define('PASS','');
            // define('DB','magiccosmetic');
         
        
            //  $con = mysqli_connect(HOST,USER,PASS,DB) or die ('Unable to connect');
            //  mysqli_set_charset($con,"utf8");
         
        

        $sql1 = "INSERT INTO user(Username,Password,User_fname,User_lname,User_add,User_email,User_tel,UserType_ID) VALUES ('".$Username."','".$Password."','".$User_fname."','".$User_lname."','".$User_add."','".$User_email."','".$User_tel."','1')";
        // echo $sql1;
        // $query = mysqli_query($con,$sql1);

            if(mysqli_query($conn,$sql1)){
                 header("Location:login.php");
             } else {
                header("Location:register_form.php");
            }
        }
    ?>
</body>


</html>
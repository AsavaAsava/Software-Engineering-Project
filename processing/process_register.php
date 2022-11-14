<?php
require("connect.php");

$name=$_POST["name"];
$mail=$_POST["email"];
$pass=password_hash($_POST["password"], PASSWORD_DEFAULT);
$type=$_POST["type"];



$sql = "INSERT INTO  users (name,email,pass,user_type)
 VALUES ('$name','$mail','$pass','$type')";

if (mysqli_query($conn,$sql)){
    echo "Record Created Successfully";
    }
    else{
        echo "Error: " .$sql ."<br>" .mysqli_error($conn);
    }
    mysqli_close($conn);

    header('Location: #/ ');
exit();
?>
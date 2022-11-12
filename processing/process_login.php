<?php
require("../config.php");
session_start();
$uname = $_POST['username'];
$pass = $_POST["password"];

$sql = "SELECT * FROM users_tbl where uname = '$uname' ";

$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($result);

if($row){
    if($pass == $row['pass'] ){
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['username'] = $uname;
        $_SESSION['role'] = $row['role'];
        echo "Login Successful";
        header('Location: http://localhost/thai-tanic/products.php');    
    }else{
        echo "Unsucessful";
    }
}else{
    echo "User not found";
}


//password_verify($pass,$row['pass'])
?>
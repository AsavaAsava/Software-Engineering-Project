<?php
require("connect.php");
session_start();
$email = $_POST['mail'];
$pass = $_POST["password"];

$sql = "SELECT * FROM users where email = '$email' ";

$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($result);

if($row){
    if(password_verify($pass,$row['password'])){
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['username'] = $row['name'];
        $_SESSION['role'] = $row['user_type'];
        $_SESSION['mail'] = $row['email'];
        echo "Login Successful";
        if($row['user_type']== 10){header('Location: http://localhost/ThaiTanic/admin_page.php');}
        if($row['user_type']== 20){header('Location: http://localhost/ThaiTanic/products.php');}
        if($row['user_type']== 30){header('Location: http://localhost/ThaiTanic/inventory.php');}   
    }else{
        echo "Unsucessful";
    }
}else{
    echo "User not found";
}

?>
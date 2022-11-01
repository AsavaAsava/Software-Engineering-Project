<?php
require("config.php");

print_r($_POST);

$sql = "UPDATE neworder
SET order_status = 1
WHERE id = ".$_POST['orderID'];

if (mysqli_query($conn,$sql)){
    echo "Update Successfully";
    }
    else{
        echo "Error: " .$sql ."<br>" .mysqli_error($conn);
    }
    mysqli_close($conn);

    header('Location: http://localhost/thai-tanic/view_orders_page.php');
exit();

?>
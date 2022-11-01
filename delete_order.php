<?php



$sql = "DELETE FROM neworder WHERE id = ".$_POST['orderID'];

if (mysqli_query($conn,$sql)){
    echo "Delete Successful";
    }
    else{
        echo "Error: " .$sql ."<br>" .mysqli_error($conn);
    }
    mysqli_close($conn);

    header('Location: http://localhost/thai-tanic/view_orders_page.php');
exit();
?>
?>
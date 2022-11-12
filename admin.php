<?php

include("connection.php");

if(isset($_POST['add_reservation'])){
    $name=$_POST['name'];
    $phone_number=$_POST['phone_number'];
    $email=$_POST['email'];
    $time=$_POST['time'];
    $date=$_POST['date'];
    $capacity=$_POST['capacity'];

    $sql="INSERT INTO `reservations`(name, phone_number, email, time, date, capacity) VALUES('$name','$phone_number','$email','$time','$date','$capacity')";
     if(mysqli_query($conn,$sql)){
        $message[]='New reservation has been made';
     }else{
        $message[]='Error in making reservation';
     }
};


if(isset($_GET['delete'])){
    $delete_id=$_GET['delete'];
    $delete_query=mysqli_query($conn,"DELETE FROM `reservations` WHERE id= $delete_id") or die('query failed');
    if($delete_query){

header('location:admin.php');
        $message[]='record has been deleted';
    }else{
        header('location:admin.php');
        $message[]='record could not be deleted';
    };
};
if(isset($_POST['update_reservation'])){
    $update_id=$_POST['update_id'];
    $update_name=$_POST['update_name'];
    $update_phone_number=$_POST['update_phone_number'];
    $update_email=$_POST['update_email'];
    $update_time=$_POST['update_time'];
    $update_date=$_POST['update_date'];
    $update_capacity=$_POST['update_capacity'];

    $update_query=mysqli_query($conn, "UPDATE `reservations` SET name='$update_name', phone_number='$update_phone_number', email='$update_email',time='$update_time', date='$update_date', capacity='$update_capacity' WHERE id='$update_id'");

    if($update_query($conn,$sql)){
        header('location:admin.php');
        $message[]='Record has been updated';

    }else{
        header('location:admin.php');
        $message[]='Error in updating record';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="icon" type="image/x-icon" href="restaurant.png">
   <style>
      <?php include '.\css\style.css'; ?>
   </style>

</head>

<body>

   <?php

   if (isset($message)) {
      foreach ($message as $message) {
         echo '<div class="message"><span>' . $message . '</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
      };
   };

   ?>

   <?php include 'header.php'; ?>

   <div class="container">

      <body bgcolor=#252837>
        <section>

      <form action="" method="post" class="add-product-form" enctype="multipart/form-data">
      <h3>Add Reservation</h3>

<input type="text" name="name" placeholder="name" class="box" required><br>
<input type="number" name="phone_number" placeholder="phone number" class="box" required><br>
<input type="text" name="email" placeholder="E-mail address" class="box" required><br>
<input type="time" name="time" placeholder="time" class="box" required><br>
<input type="date" name="date" placeholder="date" class="box" required><br>
<input type="number" name="capacity" min="0" max="5" placeholder="guests" class="box" required><br>
<input type="submit" value="Make a reservation" name="add_reservation" class="btn">
</form>

</section>

<section class="display-product-table">
    <table>
    <thead>
<th>Name</th>
<th>Phone Number</th>
<th>E-mail</th>
<th>Time</th>
<th>Date</th>
<th>Guests</th>
<th>Action</th>
        </thead>

        <tbody>
            <?php

$select_records=mysqli_query($conn,"SELECT * FROM `reservations`");
if(mysqli_num_rows($select_records)>0){
    while($row=mysqli_fetch_assoc($select_records)){
        ?>

        <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['phone_number']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['time_made']; ?></td>
            <td><?php echo $row['date_made']; ?></td>
            <td><?php echo $row['quantity']; ?></td>
            <td>
                                        <a href="admin.php?delete=<?php echo $row['id']; ?>" class="delete-btn" onclick="return confirm('are your sure you want to delete this?');"> <i class="fas fa-trash"></i> delete </a>
                                        <a href="admin.php?edit=<?php echo $row['id']; ?>" class="option-btn"> <i class="fas fa-edit"></i>update</a>
                                    </td>
                                </tr>

                        <?php
                            };
                        } else {
                            echo "<div class='empty'>no records to delete</div>";
                        };
                        ?>
                    </tbody>
                </table>

                    </section>

                    <section class="edit-form-container">
    <?php

    if(isset($_GET['edit'])){
        $edit_id=$_GET['edit'];
        $edit_query=mysqli_query($conn, "SELECT * FROM `reservations` WHERE id=$edit_id");
        if(mysqli_num_rows($edit_query)>0){
            while($fetch_edit=mysqli_fetch_assoc($edit_query)){
                ?>

                <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="update_id" value="<?php echo $fetch_edit['id']; ?>">
                    <input type="text" class="box" required name="update_name" value="<?php echo $fetch_edit['name']; ?>">
                    <input type="number" class="box" required name="update_phone_number" value="<?php echo $fetch_edit['phone_number']; ?>">
                    <input type="text" class="box" required name="update_email" value="<?php echo $fetch_edit['email']; ?>">
                    <input type="time" class="box" required name="update_time" value="<?php echo $fetch_edit['time_made']; ?>">
                    <input type="date" class="box" required name="update_date" value="<?php echo $fetch_edit['date_made']; ?>">
                    <input type="number" min="0" max="6" class="box" required name="update_capacity" value="<?php echo $fetch_edit['quantity']; ?>">
                    <input type="submit" value="update record" name="update_reservation" class="btn">
                    <input type="reset" value="cancel" id="close-edit" class="option-btn">
            </form>

            <?php
            };
        };
        echo "<script>document.querySelector('.edit-form-container').style.display = 'flex';</script>";
                };
                ?>

            </section>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>

</html>
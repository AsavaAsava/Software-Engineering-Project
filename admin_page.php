<?php

@include 'config.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href=".\css\inventory.css">
    <link rel="stylesheet" href=".\css\style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="icon" type="image/x-icon" href="restaurant.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory</title>
    <style>

    </style>
</head>

<body>

    <div class="wrapper">
        <!--Top menu -->
        <div class="section">
            <div class="top_navbar">
                <div class="hamburger">
                    <a href="#">
                        <i class="fas fa-bars"></i>

                    </a>

                </div>
            </div>

        </div>
        <div class="sidebar">
            <!--profile image & text-->
            <div class="profile">
                <img src="images\thaitanic.jpeg" alt="logo">
                <h2 style="color:white">Admin Dashboard</h2>

            </div>
            <!--menu item-->
            <ul>
                <li>
                    <a href="admin_page.php" class="active">
                        <span class="icon"><i class="bi-plus-circle-fill"></i></span>
                        <span class="item">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="admin_orders.php">
                        <span class="icon"><i class="bi bi-eye-fill"></i></span>
                        <span class="item">Order Reports</span>
                    </a>
                </li>
                <li>
                    <a href="admin_inventory.php">
                        <span class="icon"><i class="bi bi-tools"></i></span>
                        <span class="item">Inventory Reports</span>
                    </a>
                </li>
                <li>
                    <a href="admin_reservations.php">
                        <span class="icon"><i class="bi bi-trash-fill"></i></span>
                        <span class="item">Reservation Report</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
    <div class="section">
        <section>
        <div class="card">
                                <div class="card-inner">
                                    <p >PRODUCTS</p>
                                    <span class="material-icons-outlined text-blue">inventory_2</span>
                                </div>  
                                <span class="font-weight-bold">7</span>
                            </div>

        </section>

    </div>

    </div>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>
    <script>
        var hamburger = document.querySelector(".hamburger");
        hamburger.addEventListener("click", function() {
            document.querySelector("body").classList.toggle("active");
        })
    </script>
</body>

</html>
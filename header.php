<header class="header">

   <div class="flex">

      <a href="#" class="logo">Thai-Tanic</a>

      <nav class="navbar">
         <a href="reservations.php">Reservations</a>
      </nav>

      <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `reservations`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      <a href="reservations.php" class="cart">Current Reservations <span><?php echo $row_count; ?></span> </a>

      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</header>
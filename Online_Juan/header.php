<header class="header">

   <div class="flex">

      <a href="index.php" class="logo">TOKO JUAN</a>

      <nav class="navbar">
         <a href="admin.php">TAMBAH PRODUK</a>
         <a href="products.php">LIHAT PRODUK</a>
      </nav>

      <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('Query gagal');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      <a href="cart.php" class="cart">Keranjang <span><?php echo $row_count; ?></span> </a>

      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</header>
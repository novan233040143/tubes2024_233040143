<?php 

require 'admin/functions.php';

$destination = query("SELECT * FROM destination");


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Discover Bandung</title>
    <!-- Style -->
    <link rel="stylesheet" href="css/index.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap"
      rel="stylesheet"
    />
    <link
      rel="shortcut icon"
      href="assets/favicon-32x32.png"
      type="image/x-icon"
    />
  </head>

  <body>
    <!-- Navigation -->
    <div class="navigation">
      <div class="logo">
        <a href=""><img src="assets/logo.png" alt="" /></a>
      </div>
      <div class="nav">
        <a href="index.php" class="nav-link">What's On</a>
        <a href="strollshop.php" class="nav-link">Stroll & Shop</a>
        <a href="culinary.php" class="nav-link">Culinary</a>
        <a href="accomodation.php" class="nav-link">Accomodation</a>
        <a href="heritage.php" class="nav-link">Heritage</a>
      </div>
      <div class="admin">
        <a href="login.php"><ion-icon name="person-outline"></ion-icon></a>
      </div>
    </div>

    <!-- Hero -->
    <div class="hero">
      <img src="assets/header2.jpeg" alt="">
    </div>
    <div class="herotext">
      <h1>Bandung Tourism</h1>
      <h2>
        Let's Stroll around find good place.
      </h2>
    </div>

    <!-- Search Bar -->
    <div class="search-container">
      <h2>Destinations</h2>
      <form action="" class="search-bar">
        <input type="text" class="search-input" placeholder="Find Anythings">
        <button class="search-button"><ion-icon name="search-outline"></ion-icon></button>
      </form>
    </div>

    <!-- Destination -->
    <div class="catalog">
      <?php foreach ($destination as $dest) : ?>
      <div class="event2">
        <a href="floatingmarket.php">
          <div class="photo">
            <img src="assets/<?= $dest["gambar_destination"];?>" alt="" />
            <div class="textevent2">
              <h2><?= $dest["judul_destination"]; ?></h2>
            </div>
          </div>
        </a>
      </div>
      <?php endforeach; ?>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
  </body>

  <footer>
    <div class="container">
        <div class="contact">
            <h3>Contact Person</h3>
            <p>Email: novanrmd@gmail.com</p>
            <p>Telepon: +62 896 2010 2379</p>
            <p>Alamat: Jalan Dr. Setiabudhi No. 193, Gegerkalong, <br> Kecamatan Sukasari, Kota Bandung, Jawa Barat </p>
        </div>
        <div class="social-media">
            <h3>Follow Us</h3>
            <a href="https://www.facebook.com/groups/infobandungkota" target="_blank"><i class="fab fa-facebook-f"></i> Facebook</a>
            <a href="https://x.com/Infobandungkota" target="_blank"><i class="fab fa-twitter"></i> X</a>
            <a href="https://www.instagram.com/infobandungkota/" target="_blank"><i class="fab fa-instagram"></i> Instagram</a>
            <a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin"></i> LinkedIn</a>
        </div>
    </div>
    <div class="copyright">
        &copy; 2024 Discover Bandung. All rights reserved.
    </div>
</footer>
</html>

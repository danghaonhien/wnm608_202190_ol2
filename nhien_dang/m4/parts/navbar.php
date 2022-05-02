
<?php 

include_once "lib/css/php/functions.php";

?>    

<base href="https://nhien-dang.com/aau/wnm608/nhien_dang/m4/">
<nav>
  <div class="nav-content">
    <!-- logo -->
    <a href="./index.html" class="logo">
      <svg width="18" height="44" display="block">
        <circle cx="9" cy="22" r="8" stroke="black" stroke-width="1.5" fill="black" />
      </svg>
    </a>

    <!-- navigation button -->
    <div class="nav-icon">
      <div class="bar one"></div>
      <div class="bar two"></div>
    </div>

    <!-- naviagtion links -->
    <div class="nav-links">
      <a href="./index.php">Home</a>
      <a href="product_list.php/index.php">NFTs</a>
      <a href="about/index.php">About</a>
      <a href="contact/index.php">Contact</a>
      <a href="product_cart.php">   <span>Cart</span>
      <span class="badge"><?= makeCartBadge(); ?></span></a>
    </div>
  </div>
</nav>
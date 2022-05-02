<?php 

include_once "../lib/css/php/functions.php";

?> 

<!DOCTYPE html>
<html lang="en">
<head>

    <title>BauhausNFTs</title>
    <?php include "../parts/meta.php"; ?>
</head>
<body>
<?php include "../parts/navbar.php"; ?>  
    <!-- Hero -->
  
    <!-- <div class="about-hero">
	<h1 class="hero-title">ABOUT US</h1>
</div> -->

<!-- <div class="wrapper">
  <div class="name_container">
    <div class="name">Dinesh Balaji</div>
    <div class="designation">Designer &amp; Developer</div>
  </div>
</div> -->

<div class="about-hero">
    <div class="about-hero-content">
        <span class="about-hero-text">ABOUT US</span>
    </div>
</div>
<div class="content">
    <p>
    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
    <br>
    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
    </p>
</div>
 <!-- Footer -->
 <?php include "../parts/footer.php"; ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
  new Carousel({
    element: $(".carousel").eq(0),
    timing: 6000,
  });
</script>
<!--  -->
<script>
  const navIcon = document.querySelector(".nav-icon");
  const nav = document.querySelector("nav");

  navIcon.onclick = function () {
    nav.classList.toggle("show");
  };
</script>
<script type="text/javascript" src="../js/scripts.js"></script>
</body>
</html>
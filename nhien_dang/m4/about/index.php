<!DOCTYPE html>
<html lang="en">
<head>

    <title>BauhausNFTs</title>
    <?php include "../parts/subMeta.php"; ?>
</head>
<body>
<?php include "../parts/subNavbar.php"; ?>
    
    <!-- Hero -->
    <section class="hero">
      <div class="hero-content">
        <h1 class="hero-title">About Page</h1>

       
      </div>
    </section>

 <!-- Footer -->
 <?php include "../parts/footer.php"; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="./js/scripts.js"></script>
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
</body>
</html>